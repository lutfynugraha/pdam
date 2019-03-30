#include <Wire.h> 
#include <LiquidCrystal_I2C.h>

// Set the LCD address to 0x27 for a 16 chars and 2 line display
LiquidCrystal_I2C lcd(0x3F, 16, 2);

byte statusLed    = 13;
byte sensorInterrupt = 0;  // 0 = digital pin 2
byte sensorPin       = 2;

// The hall-effect flow sensor outputs approximately 4.5 pulses per second per
// litre/minute of flow.
float calibrationFactor = 4.5;

volatile byte pulseCount;  

float flowRate;
unsigned int flowMilliLitres;
unsigned long totalMilliLitres;

unsigned long oldTime;

int outputair = 0;
float totaloutput = 0.0;
float tampiltotal;

void setup()
{
  //flow]
   // Initialize a serial connection for reporting values to the host
  Serial.begin(9600);
   
  // Set up the status LED line as an output
  pinMode(statusLed, OUTPUT);
  digitalWrite(statusLed, HIGH);  // We have an active-low LED attached
  
  pinMode(sensorPin, INPUT);
  digitalWrite(sensorPin, HIGH);

  pulseCount        = 0;
  flowRate          = 0.0;
  flowMilliLitres   = 0;
  totalMilliLitres  = 0;
  oldTime           = 0;

  // The Hall-effect sensor is connected to pin 2 which uses interrupt 0.
  // Configured to trigger on a FALLING state change (transition from HIGH
  // state to LOW state)
  attachInterrupt(sensorInterrupt, pulseCounter, FALLING);
  //endflow
  
  // initialize the LCD
  lcd.begin();

  // Turn on the blacklight and print a message.
  lcd.backlight();
  lcd.setCursor(0,0);
  lcd.print("OUTPUT:");
  lcd.setCursor(0,1);
  lcd.print("TOTAL:");
}

void loop()
{
  if((millis() - oldTime) > 1000)    // Only process counters once per second
  { 
    // Disable the interrupt while calculating flow rate and sending the value to
    // the host
    detachInterrupt(sensorInterrupt);
        
    // Because this loop may not complete in exactly 1 second intervals we calculate
    // the number of milliseconds that have passed since the last execution and use
    // that to scale the output. We also apply the calibrationFactor to scale the output
    // based on the number of pulses per second per units of measure (litres/minute in
    // this case) coming from the sensor.
    flowRate = ((1000.0 / (millis() - oldTime)) * pulseCount) / calibrationFactor;
    
    // Note the time this processing pass was executed. Note that because we've
    // disabled interrupts the millis() function won't actually be incrementing right
    // at this point, but it will still return the value it was set to just before
    // interrupts went away.
    oldTime = millis();
    
    // Divide the flow rate in litres/minute by 60 to determine how many litres have
    // passed through the sensor in this 1 second interval, then multiply by 1000 to
    // convert to millilitres.
    
    flowMilliLitres = (flowRate / 60) * 1000;
    if (flowMilliLitres == 0)
    {
      outputair = 0;
      lcd.setCursor(7,0);
      lcd.print("0     ");
    }
    else
    {
    outputair = flowMilliLitres *5;
    }
    lcd.setCursor(7,0);
    lcd.print(outputair);
    
    lcd.setCursor(10,0);
    lcd.print(" L");
    
    Serial.print("Keluaran AIR ");
    Serial.print(flowMilliLitres);
    Serial.print(" mL ");
    
    // Add the millilitres passed in this second to the cumulative total
    totalMilliLitres += flowMilliLitres;

    totaloutput += outputair;

    tampiltotal = totaloutput/1000;

    lcd.setCursor(7,1);
    lcd.print(tampiltotal);
    lcd.setCursor(13,1);
    lcd.print("M3");
      
    unsigned int frac;
    
    // Print the flow rate for this second in litres / minute
    Serial.print(" Debit Air: ");
    Serial.print(int(flowRate));  // Print the integer part of the variable
    Serial.print("L/min");
    Serial.print("\t");       // Print tab space

    // Print the cumulative total of litres flowed since starting
    Serial.print("Total : ");        
    Serial.print(totalMilliLitres);
    Serial.print("mL"); 
    Serial.print("\t");       // Print tab space
   
    Serial.print(" = ");
    Serial.print(totalMilliLitres/1000);
    Serial.println(" L");
    

    // Reset the pulse counter so we can start incrementing again
    pulseCount = 0;
    
    // Enable the interrupt again now that we've finished sending output
    attachInterrupt(sensorInterrupt, pulseCounter, FALLING);
  }
}

void pulseCounter()
{
  // Increment the pulse counter
  pulseCount++;
}
