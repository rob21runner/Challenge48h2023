let video = document.querySelector('video');
video.playbackRate = 0.5;
video.play().then(() => {
    const timeline = gsap.timeline();

    timeline.to('video', {
        opacity: 1,
        duration: 1.2,
        scale: 1,
        ease: 'Power4.easeOut',
        rotateZ: 0,
        startAt: {
            scale: 2,
            rotateZ: 15
        }
    });

    timeline.from('.error-code div', {
        y: 75,
        opacity: 0,
        duration: 1.2,
        stagger: 0.1,
        ease: 'Power4.easeOut'
    }, "< 0.2");

    timeline.from('#error-message .word', {
        y: 75,
        opacity: 0,
        duration: 0.8,
        stagger: 0.025,
        ease: 'Power4.easeOut',
        delay: 0.5
    }, "<");
});

setTimeout(() => alert("Pensez à aller plus loin que le simple visuel de la page..."), 5 * 1000)
