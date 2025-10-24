document.addEventListener('DOMContentLoaded', () => {
    const savedLang = localStorage.getItem('lang');
    if(savedLang){
        document.cookie = `lang=${savedLang};path=/;max-age=${60*60*24*30}`;
    }

    const langLinks = document.querySelectorAll('.dropdown-menu a');

    langLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault(); 
            const selectedLang = link.getAttribute('href').split('lang=')[1];
            
            localStorage.setItem('lang', selectedLang);
            document.cookie = `lang=${selectedLang};path=/;max-age=${60*60*24*30}`;

            const currentUrl = window.location.href.split('?')[0];
            const urlParams = new URLSearchParams(window.location.search);
            urlParams.set('lang', selectedLang);
            window.location.href = `${currentUrl}?${urlParams.toString()}`;
        });
    });
});

// Получаем кнопку
const scrollBtn = document.getElementById("scrollTopBtn");

// Показываем кнопку, если прокрутили вниз
window.onscroll = function() {
  if (window.scrollY > 200) {
    scrollBtn.classList.add("show");
  } else {
    scrollBtn.classList.remove("show");
  }
};

window.addEventListener("scroll", () => {
  if (window.scrollY > 200) {
    scrollBtn.classList.add("show");
  } else {
    scrollBtn.classList.remove("show");
  }
});

// При клике прокручиваем наверх
scrollBtn.addEventListener("click", () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth" // плавная прокрутка
  });
});

