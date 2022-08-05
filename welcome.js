firebase.auth().onAuthStateChanged((user)=>{
    if(!user){
        location.replace("login.html")
    }else{
        location.replace("online.html")
        window.stop()
    }
})

function logout(){
    firebase.auth().signOut()
}