let modalTimeline = gsap.timeline();

if (modalTimeline) {
    modalTimeline.from('.backdrop', {
        opacity: 0,
        duration: 0.4,
        ease: 'Power4.easeOut',
    })
    modalTimeline.from('.modal', {
        opacity: 0,
        duration: 1.2,
        ease: 'Power4.easeOut',
        y: 72
    })
}

let closeModalButton = document.querySelector(".button[closeModal]");

closeModalButton.addEventListener("click", (evt) => {
    modalTimeline.reverse().then(() => {
        document.querySelector('.popup').style.display = 'none';
    });
});
