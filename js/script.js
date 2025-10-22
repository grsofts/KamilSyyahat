document.addEventListener('DOMContentLoaded', () => {
    // const langSelect = document.getElementById('langSelect');

    // const savedLang = localStorage.getItem('lang');
    // if(savedLang){
    //     document.cookie = `lang=${savedLang};path=/;max-age=${60*60*24*30}`;
    // }

    // langSelect.addEventListener('change', () => {
    //     const selectedLang = langSelect.value;
    //     localStorage.setItem('lang', selectedLang);
    //     const currentUrl = window.location.href.split('?')[0];
    //     const urlParams = new URLSearchParams(window.location.search);
    //     urlParams.set('lang', selectedLang);
    //     window.location.href = `${currentUrl}?${urlParams.toString()}`;
    // });


     // Восстанавливаем язык из localStorage в cookie при загрузке
    const savedLang = localStorage.getItem('lang');
    if(savedLang){
        document.cookie = `lang=${savedLang};path=/;max-age=${60*60*24*30}`;
    }

    // Находим все ссылки в dropdown меню выбора языка
    const langLinks = document.querySelectorAll('.dropdown-menu a');

    langLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault(); // чтобы ссылка не сработала сразу
            const selectedLang = link.getAttribute('href').split('lang=')[1]; // получаем "en", "ru", "tm"
            
            // Сохраняем в localStorage и cookie
            localStorage.setItem('lang', selectedLang);
            document.cookie = `lang=${selectedLang};path=/;max-age=${60*60*24*30}`;

            // Перезагружаем страницу с выбранным языком
            const currentUrl = window.location.href.split('?')[0];
            const urlParams = new URLSearchParams(window.location.search);
            urlParams.set('lang', selectedLang);
            window.location.href = `${currentUrl}?${urlParams.toString()}`;
        });
    });
});
