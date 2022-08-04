
import firebase from src="https://www.gstatic.com/firebasejs/9.9.0/firebase-app.js"
const firebaseConfig = {
    apiKey: "AIzaSyD1XTj4BWTiu6oYkPJ_HHYPQYT_gpJdtls",
    authDomain: "login-with-firebase-db.firebaseapp.com",
    projectId: "login-with-firebase-db",
    storageBucket: "login-with-firebase-db.appspot.com",
    messagingSenderId: "361754302833",
    appId: "1:361754302833:web:d6e7f6c5632aa070bc3ed0"
  };

  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

    const auth = firebase.auth()
     const database = firebase.database()


  //register function
   function register(){
    email=document.getElementById('email').value
    username=document.getElementById('username').value
    password=document.getElementById('password').value
    
    if(validate_password(password)==false){
        return
    }

    auth.createUserWithEmailAndPassword(email,password)
    .then(function(){
      
        var user=auth.currentUser

        var database_ref=database.ref()

        var user_data={
            email:email,
            username:username,
            last_login:Date.now()
        }
        database_ref.child('users/' +user.uid).set(user_data)
        alert('User  Created')
    })
    .catch(function(error){
        var error_code=error_code
        var error_message=error_message
        alert(error_message)
    })
   }


   function validate_password(password){
    if(password<6){
        return false
    }else{
        return true
    }
   }