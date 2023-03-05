import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.10/firebase-app.js";
import { getAuth } from "https://www.gstatic.com/firebasejs/9.6.10/firebase-auth.js";

const firebaseConfig = {
    apiKey: "AIzaSyCEMpGBVy_7Hq4unG37cg0aglUZ1zPj3Rw",
    authDomain: "mirkuz-home-care.firebaseapp.com",
    databaseURL: "https://mirkuz-home-care-default-rtdb.firebaseio.com",
    projectId: "mirkuz-home-care",
    storageBucket: "mirkuz-home-care.appspot.com",
    messagingSenderId: "466124354657",
    appId: "1:466124354657:web:8a2585f80e38b1076f2620",
    measurementId: "G-1FEDHCRYKJ"
};

// Initialize Firebase
export const app = initializeApp(firebaseConfig);
export const auth = getAuth(app);