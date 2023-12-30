const synth = window.speechSynthesis
const utter = new SpeechSynthesisUtterance()
let isSpeaking = false; 

function speak(text){
    if(isSpeaking === false){
        isSpeaking = true;
        utter.text = text;
        synth.speak(utter);

    }
    isSpeaking = false; 

}