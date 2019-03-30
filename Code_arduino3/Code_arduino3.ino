#include <SPI.h>
#include <Ethernet.h>
#include <Wire.h>
#include <DHT.h>
#define DHTPIN A0
#define DHTTYPE DHT11
DHT dht(DHTPIN, DHTTYPE);
String data;
String tstr;

//String id_pelanggan = "12345"; //1. GINA MARLINA
//String id_pelanggan = "56796"; //2. NURUL HUDA
//String id_pelanggan = "56797"; //3.SAMSUL JAJURI
///String id_pelanggan = "56798"; //4.AI NURUL HIDAYATI
//String id_pelanggan = "56799"; //5. AI SITI RUBAIAH
//String id_pelanggan = "56800"; //6. DIAN SETIAWATI
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
String id_pelanggan = "56815"; //20. TOTO ISJAYANTO
  float humidity = 0;
  float temperature = 0;
byte mac[] = { 0xDE, 0xAD, 0xBE, 0xEF, 0xFE, 0xED };   //physical mac address
byte ip[] = { 192, 168, 1, 13};                      // ip in lan (that's what you need to use in your browser. ("192.168.1.178")
byte gateway[] = { 192, 168, 1, 5};                   // internet access via router=la ip cua PC ban
byte subnet[] = { 255, 255, 255, 0 };
EthernetServer server(80);                    // Cong truy cap internet cua XAMP(mac dinh la 80 ban co the doi)
EthernetClient client;//server port
String readString;

void setup() {
  pinMode(2, OUTPUT);
  pinMode(3, OUTPUT);
  pinMode(4, OUTPUT);
  pinMode(5, OUTPUT);
  Serial.begin(9600);
  dht.begin();
  delay(1000);
  while (!Serial) { ;}
  Ethernet.begin(mac, ip, gateway, subnet);
  server.begin();
  Serial.print("server is at ");
  Serial.println(Ethernet.localIP());
 // digitalWrite(2, HIGH);
 // digitalWrite(3, HIGH);
//  digitalWrite(4, HIGH);
//  digitalWrite(5, HIGH);
Serial.print("Id Pelanggan :");
 Serial.println(id_pelanggan);
}
void loop() {
  delay(200);
  float humidity = dht.readHumidity();  
  float temperature = dht.readTemperature();
  float f = dht.readTemperature(true);
            Serial.print("Temperature: ");
            Serial.println(temperature);
            Serial.print("Humidity: ");
            Serial.println(humidity);
  if (isnan(humidity) || isnan(temperature) || isnan(f)) {
    Serial.println("Failed to read from DHT sensor!");
    return;
  }

  sendTemperature(temperature);
  sendHumidity(humidity);
  pinStatus();
  //parseGet();
  delay(800);
  /*
  if (client) {
    while (client.connected()) {
      if (client.available()) {
        char c = client.read();
        tstr += c;
        if (c == '\n') {break;}
        Serial.println("kiem tra thanh cong");
      }
    }
    parseGet(tstr);
    tstr = "";

    delay(1);
  }
  client.stop();*/
}


void sendTemperature(float temperature) {
  if (client.connect("192.168.1.5",80)) { //alamat server
        String request = "GET /pdamtiga/temp/functions/ajax/in_sensor.php?temp="+String(temperature);
        request += "&id_pelanggan="+String(id_pelanggan);
        
        request += " HTTP/1.0";
        client.println(request);

    //String request = "GET /pdam/pc/ajax/pin_status.php?pin_2="+String(pin_2);
    //request += "&pin_3="+String(pin_3);
    //request += "&pin_4="+String(pin_4);
    //request += "&pin_5="+String(pin_5);
    //request += " HTTP/1.0";
    //client.println(request);
        
        Serial.println("Gui temp thanh cong");
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
//Ham gui do am vao bang "humidity" trong Databse

void sendHumidity(float humidity) {
  if (client.connect("192.168.1.5",80)) { // alamat server
    String request = "GET /pdam/hum/includes/write_hum.php?humidity=";
    request += String(humidity);
    request += " HTTP/1.0";
    client.println(request);
    Serial.println("Gui do am thanh cong");
    // Serial.println(request);
    client.println("Host: 192.168.1.5"); // alamat server
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
void pinStatus() {
  if (client.connect("192.168.1.5",80)) {
    int pin_2 = 0;
    int pin_3 = 0;
    int pin_4 = 0;
    int pin_5 = 0;
    if (digitalRead(2) == HIGH)
      pin_2 = 1;
    if (digitalRead(3) == HIGH)
      pin_3 = 1;
    if (digitalRead(4) == HIGH)
      pin_4 = 1;
    if (digitalRead(5) == HIGH)
      pin_5 = 1;


    String request = "GET /pdam/pc/ajax/pin_status.php?pin_2="+String(pin_2);
    request += "&pin_3="+String(pin_3);
    request += "&pin_4="+String(pin_4);
    request += "&pin_5="+String(pin_5);
    request += " HTTP/1.0";
    client.println(request);

    client.println("Host: 192.168.1.5"); // SERVER ADDRESS HERE TOO
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

void parseGet(String str) {
  int from = str.indexOf('?');
  int to = str.indexOf(' ', from);

  String GET = str.substring(from, to);

  if (GET == "?pin_2=on") {
    digitalWrite(2, HIGH);
    Serial.println("*********PIN 2 HIGH************");
  }
  if (GET == "?pin_2=off") {
    digitalWrite(2, LOW);
    Serial.println("*********PIN 2 LOW************");

  }

  if (GET == "?pin_3=on") {
    digitalWrite(3, HIGH);
    Serial.println("*********PIN 3 HIGH************");
  }
  if (GET == "?pin_3=off") {
    digitalWrite(3, LOW);
    Serial.println("*********PIN 3 LOW************");
  }

  if (GET == "?pin_4=on") {
    digitalWrite(4, HIGH);
    Serial.println("*********PIN 4 HIGH************");
  }
  if (GET == "?pin_4=off") {
     digitalWrite(4, LOW);
    Serial.println("*********PIN 4 LOW************");
  }

  if (GET == "?pin_5=on") {
    digitalWrite(5, HIGH);
    Serial.println("*********PIN 5 HIGH************");
  }
  if (GET == "?pin_5=off") {
     digitalWrite(5, LOW);
    Serial.println("*********PIN 5 LOW************");
  }
  
  if (GET == "?pin=status") {
    pinStatus();
    Serial.println("*********PIN STATUS************");
  }
}

