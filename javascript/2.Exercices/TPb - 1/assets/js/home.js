function initLinkSection() {
    function addSectionLink(targetLink, targetSection) {
        elementsSelectors.push({
            targetLink: targetLink,
            targetSection : targetSection
        });
    }

    const elementsSelectors = [];

    addSectionLink('#linkHome', '#sectionHome');
    addSectionLink('#linkClient', '#sectionClient');
    addSectionLink('#linkFood', '#sectionFood');
    addSectionLink('#linkContact', '#sectionContact');

    elementsSelectors.forEach(function(currentSelector) {
        document.querySelector(currentSelector.targetLink).addEventListener('click', function() {
            var targetHeightPosition = document.querySelector(currentSelector.targetSection).offsetTop - 50;
            checkLinkSection();
            window.scrollTo(0, targetHeightPosition);
        });
    })

    document.querySelector('#upPageTop').addEventListener('click', function() {
        window.scrollTo(0, 0);
        checkLinkSection();
    });
}


window.addEventListener('scroll', checkLinkSection);

function checkLinkSection() {
    const heightSection = document.querySelector('.section-content').offsetHeight - 60;
    const indexSectionTarget = parseInt(window.pageYOffset / heightSection);
    var targetElement;

    switch (indexSectionTarget) {
        case 0:
            targetElement = document.querySelector('#linkHome');
            break;
        case 1:
            targetElement = document.querySelector('#linkClient');
            break;
        case 2:
            targetElement = document.querySelector('#linkFood');
            break;
        case 3:
            targetElement = document.querySelector('#linkContact');
            break;
    }

    document.querySelectorAll('.nav-links > a').forEach(function(currentElement) {
        currentElement.classList.remove('active');
    });

    targetElement.classList.add('active');
}