//quotes list
const quotes = [
    //quotes 
    "your tungSahara Adventure awaits .",
    "the best journey you will know.",
    "be a good sahur not a bad sahur.",
];

function newQuote() {
    //gives random quote
    const random = Math.floor(Math.random() * quotes.length);
    document.getElementById("quote").textContent = quotes[random];
}
//every new click on the button new quote will be shown
document.getElementById("quoteBtn")
//event for each new click
.addEventListener("click", newQuote);