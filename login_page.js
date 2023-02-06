const button = document.querySelector("input[name='submit']");
button.addEventListener('mouseover', function() {
    const x = Math.floor((Math.random()-0.5) * window.innerWidth/2);
    const y = Math.floor((Math.random()-0.5) * window.innerHeight/2);
    button.style.top = x + "px";
    button.style.left = y + "px";
});
