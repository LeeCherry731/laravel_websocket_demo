const axios = require("axios");

require("./bootstrap");

const form = document.getElementById("form");
const inputMessage = document.getElementById("input-message");

form.addEventListener("submit", function (event) {
    event.preventDefault();
    const userInput = inputMessage.value;

    axios.post("/chat-message", {
        message: userInput,
    });

    inputMessage.value = "";
});

const channel = Echo.channel("public.chat.1");

channel
    .subscribed(() => {
        console.log("subscribedd!");
    })
    .listen(".chat-message", function (e) {
        console.log(e);
    });
