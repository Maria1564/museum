const filterSelects = document.querySelectorAll('.select');

filterSelects.forEach(select => {
    const text = select.querySelector(".select__text");
    const initialText = text.textContent;

    select.addEventListener("click", (e) => {
        const button = e.target.closest(".select__button");

        if (button && !select.classList.contains("select_selected")) {
            select.classList.toggle("select_open");
        }

        const closeBtn = e.target.closest(".select__icon_cross");

        if (closeBtn) {
            select.classList.remove("select_selected");
            select.classList.remove("select_open");
            text.textContent = initialText;
            return;
        }

        const option = e.target.closest(".select__option");

        if (option) {
            select.classList.remove("select_open");
            text.textContent = option.textContent.trim();
            select.classList.add("select_selected");
        }
    });
});
