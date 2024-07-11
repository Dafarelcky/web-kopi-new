import './bootstrap';

// sidebar

function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    sidebar.classList.toggle('hidden');
}


document.getElementById('mobileMenuButton').addEventListener('click', toggleSidebar);


const accordionTriggers = document.querySelectorAll('.accordion-trigger');

accordionTriggers.forEach(trigger => {
    trigger.addEventListener('click', function() {
        const content = this.nextElementSibling.querySelector('ul');

        content.classList.toggle('hidden');
        this.querySelector('svg').classList.toggle('rotate-0');
        this.querySelector('svg').classList.toggle('-rotate-90');
    });
});



document.addEventListener('trix-file-accept', function(e) {
    e.preventDefault()
})
