#include <SPI.h>
#include <Ethernet.h>
#include <Wire.h>
#include <LiquidCrystal_I2C.h>

// Set the LCD address to 0x27 for a 16 chars and 2 line display
LiquidCrystal_I2C lcd(0x3f, 16, 2); //ip. 13 lcd biru
//LiquidCrystal_I2C lcd(0x27, 16, 2); //ip .12 lcd kuning

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

String data;

//String id_pelanggan = "12345"; //1. GINA MARLINA
//String id_pelanggan = "56796"; //2. NURUL HUDA
//String id_pelanggan = "56797"; //3.SAMSUL JAJURI
///String id_pelanggan = "56798"; //4.AI NURUL HIDAYATI
//String id_pelanggan = "56799"; //5. AI SITI RUBAIAH
String id_pelanggan = "56800"; //6. DIAN SETIAWATI
//String id_pelanggan = "56801"; //7. AGUS EPENDI  
//String id_pelanggan = "56802"; //8. heruda novendi
//String id_pelanggan = "56803"; //9.ikeu rosilawati
//String id_pelanggan = "56805"; //10. didi sudiana
//String id_pelanggan = "56806"; //11.indah irawati
//String id_pelanggan = "56807"; //12.joko anwar
//String id_pelanggan = "56808"; //13. kurniawan maulana
//String id_pelanggan = "56809"; //14. MARYATI
//String id_pelanggan = "56810"; //15. WAWAN RIDWAN
//String id_pelanggan = "56811"; //16. PURRI JULIANA NOARI
//String id_pelanggan = "56812"; //17. KIKI NURHAKIKI
//String id_pelanggan = "56813"; //18. JAJANG NURJAMAN
//String id_pelanggan = "56814"; //19. KOMARUDIN
//String id_pelanggan = "56815"; //20. TOTO ISJAYANTO
//String id_pelanggan = "56816"; //21. NINA IRAWATI

byte mac[] = { 0xDE, 0xAD, 0xBE, 0xEF, 0xFE, 0xED };   //physical mac address
byte ip[] = { 192, 168, 1, 13};                      // ip in lan (that's what you need to use in your browser. ("192.168.1.178")
byte gateway[] = { 192, 168, 1, 5};                   // internet access via router=la ip cua PC ban
byte subnet[] = { 255, 255, 255, 0 };
EthernetServer server(80);                    // Cong truy cap internet cua XAMP(mac dinh la 80 ban co the doi)
EthernetClient client;//server port
String readString;



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

  delay(1000);
  while (!Serial) { ;}
  Ethernet.begin(mac, ip, gateway, subnet);
  server.begin();
  Serial.print("server is at ");
  Serial.println(Ethernet.localIP());
  Serial.print("Id Pelanggan :");
  Serial.println(id_pelanggan);
    Serial.print("ip saat ini:");
  Serial.println(Ethernet.localIP());
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

      if(flowMilliLitres != 0)
      {
        sendTemperature(outputair);
      }
  }
}

void pulseCounter()
{
  // Increment the pulse counter
  pulseCount++;
}

void sendTemperature(float temperature) { 
  if (client.connect("192.168.1.5",80)) { //alamat server
        String request = "GET /pdamtiga/temp/functions/ajax/in_sensor.php?temp="+String(temperature);
        request += "&id_pelanggan="+String(id_pelanggan);
        
        request += " HTTP/1.0";
        client.println(request);

        
        Serial.println("");
    client.println("Host: 192.168.1.5"); //alamat server
    client.println("Content-Type: application/x-www-form-urlencoded");
    client.print("Content-Length: ");
    client.println(data.length());
    client.println();
    client.print(data);
  }

  if (client.connected()) {
    client.stop();  // DISCONNECT FROM THE SERVER
  }
}
