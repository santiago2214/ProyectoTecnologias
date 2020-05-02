
firebase.initializeApp({
  apiKey: 'AIzaSyAbA_BUTFIAwrg6cYKdOY9RoaM_uKDx3qM',
  authDomain: 'usuarios-ff59c.firebaseapp.com',
  projectId: "usuarios-ff59c"
});

var db = firebase.firestore();

db.collection("users").add({
    first: "Ada",
    last: "Lovelace",
    born: 1815
})
.then(function(docRef) {
    console.log("Document written with ID: ", docRef.id);
})
.catch(function(error) {
    console.error("Error adding document: ", error);
});
