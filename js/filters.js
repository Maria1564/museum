const filterSelects = document.querySelectorAll('.select');

filterSelects.forEach(select => {
    const text = select.querySelector(".select__text");
    const initialText = text.textContent;

    select.addEventListener("click", (e) => {
        const button = e.target.closest(".select__button");

        if (button && !select.classList.contains("select_selected")) {
            filterSelects.forEach(openedSelect => {
                if (openedSelect !== select) {
                    openedSelect.classList.remove("select_open");
                }
            });

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

document.addEventListener("click", (e) => {
    if (e.target.closest(".select")) {
        return;
    }

    filterSelects.forEach(select => {
        select.classList.remove("select_open");
    });
});



// открытие/закрытие плашки фильтров

const filtersOpenButton = document.querySelector(".events-page__btn-toggle")
const filtersDrawer = document.querySelector(".events-filters.drawer")
const filtersWrapper  = filtersDrawer?.querySelector(".drawer__wrapper")
const filtersCloseButton  = filtersDrawer?.querySelector(".drawer__close-icon")

if (filtersOpenButton && filtersDrawer && filtersWrapper) {

  filtersOpenButton.addEventListener("click", () => {
    openDrawer(filtersDrawer)
  })

  filtersCloseButton?.addEventListener("click", () => {
    closeDrawer(filtersDrawer)
  })

  filtersDrawer.addEventListener("click", (event) => {
    if (!filtersWrapper.contains(event.target)) {
      closeDrawer(filtersDrawer)
    }
  })
}
