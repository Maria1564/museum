const agreementCheckbox = document.querySelector(".contacts-form__agreement-input")
const submitButton = document.querySelector(".contact-form__btn-submit")

const updateSubmitButtonState = () => {
  if (!agreementCheckbox || !submitButton) {
    return
  }

  submitButton.disabled = !agreementCheckbox.checked
}

updateSubmitButtonState()
agreementCheckbox?.addEventListener("change", updateSubmitButtonState)
