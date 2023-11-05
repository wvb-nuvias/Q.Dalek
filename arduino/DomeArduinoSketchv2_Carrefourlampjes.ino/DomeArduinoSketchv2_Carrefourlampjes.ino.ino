const int DOMELIGHT = 6;

int incomingAudio;
int incomingByte = 0; 

unsigned long previousMillis = 0;
unsigned long previousLedstripMillis = 0;
unsigned long currentMillis = 0; 

bool DomeLight_enabled = false;

void setup() {
  pinMode(DOMELIGHT, OUTPUT);      
  digitalWrite(DOMELIGHT, LOW);

  Serial.begin(9600); 
  
  previousLedstripMillis=millis();
  previousMillis=millis();
  
  Serial.println("{success: true, message: 'Dome Interface Ready.'}");
}

void loop() {    
  currentMillis = millis();
  incomingAudio = analogRead(A0);
  
  if (Serial.available() > 0) {    
    incomingByte = Serial.read();

    switch (incomingByte) {
      case 'l':
        if (DomeLight_enabled) {
          DomeLight_enabled=false;
          digitalWrite(DOMELIGHT, LOW);
          Serial.println("{success: true, message: 'Dome Light disabled.'}");          
        } else {
          DomeLight_enabled=true;
          digitalWrite(DOMELIGHT, HIGH);
          Serial.println("{success: true, message: 'Dome Light enabled.'}");          
        }
        break;     
    }
  }

  Serial.println(incomingAudio);
}
