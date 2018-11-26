const notification = document.querySelector('#notification');
const close = document.querySelector('#close');
const dismiss = document.querySelector('#dismiss');
const tipHeader = document.querySelector('#tip-header');
const tipContent = document.querySelector('#tip-content');
const prev = document.querySelector('#prev');
const next = document.querySelector('#next');
const bulletsContainer = document.querySelector('#bullets-container');
let counter = 2;

let notifs = [
  'That’s almost half of the world’s population. (Out of the other half not using email, 1.6 billion people still don’t have electricity.)',
  'Conversion rates are huge in business. They show your ability to turn prospects into customers or subscribers based on the content you create.',
  'More than 60% of emails we send do not require a response. Use "No response needed" to make sure recipients know that a response is unnecessary',
  'While there are many benefits of using email marketing, this is the one that keeps you in business.',
  'Why? According to Forrester, people are twice as likely to sign up for your email list as they are to interact with you on Facebook.',
  'While social media and search should not be ignored, email has higher conversion rates than these two tactics combined.'
];


const hideNotification = () => {
  notification.classList.add('-hidden');
  notification.innerHTML = '';
};

const showNotification = () => {
  notification.classList.remove('-hidden');
}


const renderBullets = (index) => {
  bulletsContainer.innerHTML = notifs
  .map((item, k) => `<div class="bullet${k === index ? ' -current' : ''}">&#8226;</div>`)
  .join('\n');
};

const renderItems = (index) => {
  if (notifs[index]) {
    tipHeader.innerHTML = "EMAIL TIP OF THE DAY";
    tipContent.innerHTML = notifs[index];
    renderBullets(counter);
  }
};


const toNext = () => {
  if (counter === notifs.length - 1) {
    counter = 0;
  } else {
    counter++;
  }
  renderItems(counter);
};

next.addEventListener('click', e => {toNext()});

const toPrevious = () => {
  if (counter === 0) {
    counter = notifs.length - 1;
  } else {
    counter--;
  }
  renderItems(counter);
};

prev.addEventListener('click', e => {toPrevious()});


close.addEventListener('click', e => {
  hideNotification();
});

dismiss.addEventListener('click', e => {
  populateStorage();
});

document.addEventListener('keyup', e => {
  if (e.keyCode === 27) { // escape key
    hideNotification();
  }

  if (e.keyCode === 37 && e.ctrlKey) { // to left
    toPrevious();
  }

  if (e.keyCode === 39 && e.ctrlKey) { // to right
    toNext();
  }
});


const populateStorage = () => {
  if (dismiss.checked) {
    localStorage.setItem('dismiss', dismiss.checked);
  } else {
    localStorage.removeItem('dismiss');
  }
};

const loadNotification = () => {
  if(localStorage.getItem('dismiss') === 'true' || notifs.length === 0) {
    hideNotification();
  } else {
    setTimeout(showNotification, 1500);
    renderItems(counter);
  }
};

loadNotification();
