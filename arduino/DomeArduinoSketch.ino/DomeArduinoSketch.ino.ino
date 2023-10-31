const int LEDPIN1_LEFTLIGHT = 3;
const int LEDPIN2_LEFTLIGHT = 6;
const int LEDPIN3_LEFTLIGHT = 5;

const int LEDPIN1_RIGHTLIGHT = 11;
const int LEDPIN2_RIGHTLIGHT = 9;
const int LEDPIN3_RIGHTLIGHT = 10;

int incomingByte = 0; 
unsigned long previousMillis = 0;
unsigned long previousLedstripMillis = 0;
unsigned long currentMillis = 0; 

bool leftlight_enabled = false;
bool rightlight_enabled = false;

void setup() {
  analogWrite(LEDPIN1_LEFTLIGHT, 0);      
  analogWrite(LEDPIN2_LEFTLIGHT, 0);
  analogWrite(LEDPIN3_LEFTLIGHT, 0);

  analogWrite(LEDPIN1_RIGHTLIGHT, 0);      
  analogWrite(LEDPIN2_RIGHTLIGHT, 0);
  analogWrite(LEDPIN3_RIGHTLIGHT, 0);
      
  Serial.begin(9600); 
  
  previousLedstripMillis=millis();
  previousMillis=millis();
  
  Serial.println("{success: true, message: 'Dome Interface Ready.'}");
}

void loop() {    
  currentMillis = millis();
  
  if (Serial.available() > 0) {    
    incomingByte = Serial.read();

    switch (incomingByte) {
      case 'l':
        if (leftlight_enabled) {
          leftlight_enabled=false;
          analogWrite(LEDPIN1_LEFTLIGHT, 0);      
          analogWrite(LEDPIN2_LEFTLIGHT, 0);
          analogWrite(LEDPIN3_LEFTLIGHT, 0);
          Serial.println("{success: true, message: 'Left Light disabled.'}");          
        } else {
          leftlight_enabled=true;
          analogWrite(LEDPIN1_LEFTLIGHT, 1);      
          analogWrite(LEDPIN2_LEFTLIGHT, 1);
          analogWrite(LEDPIN3_LEFTLIGHT, 1);
          Serial.println("{success: true, message: 'Left Light enabled.'}");          
        }
        break;
      case 'r':
        if (rightlight_enabled) {
          rightlight_enabled=false;
          analogWrite(LEDPIN1_RIGHTLIGHT, 0);      
          analogWrite(LEDPIN2_RIGHTLIGHT, 0);
          analogWrite(LEDPIN3_RIGHTLIGHT, 0);
          Serial.println("{success: true, message: 'Right Light disabled.'}");          
        } else {
          rightlight_enabled=true;
          analogWrite(LEDPIN1_RIGHTLIGHT, 1);      
          analogWrite(LEDPIN2_RIGHTLIGHT, 1);
          analogWrite(LEDPIN3_RIGHTLIGHT, 1);
          Serial.println("{success: true, message: 'Right Light enabled.'}");          
        }
        break;
    }
  }
}
