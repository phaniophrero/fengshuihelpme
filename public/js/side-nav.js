// get all element from side medu
const allitems = document.querySelectorAll('.l-side-nav-container ul li a');

allitems.forEach(item => {
    item.addEventListener('click', function (e) {
        // here we will write loop remove all previous classes active
        for (var i = 0; i < allitems.length; i++) {
            allitems[i].classList.remove("active");
        }
        this.classList.add('active');
    });
});
