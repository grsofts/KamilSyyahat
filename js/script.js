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
