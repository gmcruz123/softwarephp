var tokenUser = "";

var config = {
    apiKey: "AIzaSyCh-5-TYVNSt0E0D-PSyHAIU1pvHUa2PGQ",
    authDomain: "videocallangular.firebaseapp.com",
    databaseURL: "https://videocallangular.firebaseio.com",
    projectId: "videocallangular",
    storageBucket: "videocallangular.appspot.com",
    messagingSenderId: "612925373463"
  };
  firebase.initializeApp(config);

  const messaging = firebase.messaging();

  messaging.requestPermission().then(function() {
  console.log('Notification permission granted.');

   getRegToken();



}).catch(function(err) {
  console.log('Unable to get permission to notify.', err);
});


function getRegToken(){
  messaging.getToken()
    .then(function(currentToken) {
        tokenUser = currentToken
      if (currentToken) {
        


        setTokenSentToServer(true);
        console.log(currentToken)
  } else {
   
        console.log('No Instance ID token available. Request permission to generate one.');
       setTokenSentToServer(false);
  }
}).catch(function(err) {
  console.log('An error occurred while retrieving token. ', err);
 // showToken('Error retrieving Instance ID token. ', err);
  setTokenSentToServer(false);
});}

function setTokenSentToServer(sent) {
	    window.localStorage.setItem('sentToServer', sent ? 1 : 0);
	}
	function isTokenSentToServer() {
	    return window.localStorage.getItem('sentToServer') == 1;
	}


messaging.onMessage(function(payload) {
    console.log("Message received. ", payload);
   
	  notificationTitle = payload.data.title;
	  notificationOptions = {
	  	body: payload.data.body,
	  	icon: payload.data.icon,
	  	image:  payload.data.image
	  };
   

    if(confirm("Presione aceptar para ir a la videollamada")) {
    location.href = notificationOptions.body;
}

	});
