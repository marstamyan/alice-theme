;(function () {
  document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector(".mk-contact-form")
    const messageBox = document.querySelector(".form-message")

    const { ajaxurl, nonce, success_message, error_message } = ajax_forms_data

    form.addEventListener("submit", function (e) {
      e.preventDefault()
      messageBox.textContent = ""

      const name = form.name.value.trim()
      const email = form.email.value.trim()
      const message = form.textarea.value.trim()

      if (!name || !email || !message) {
        messageBox.textContent = "Please fill in all required fields."
        return
      }

      if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        messageBox.textContent = "Invalid email address."
        return
      }

      const formData = new FormData(form)
      formData.append("nonce", nonce)

      fetch(ajaxurl, {
        method: "POST",
        body: formData,
      })
        .then((response) => {
          if (!response.ok) throw new Error("Network error")
          return response.text()
        })
        .then((data) => {
          switch (data.trim()) {
            case "success":
              messageBox.style.color = "green"
              messageBox.textContent = success_message
              form.reset()
              break
            case "invalid_email":
              messageBox.textContent = "Please enter a valid email."
              break
            case "message_too_long":
              messageBox.textContent = "Message is too long."
              break
            case "mail_failed":
              messageBox.textContent = "Failed to send. Please try later."
              break
            default:
              messageBox.textContent = error_message + ": " + data
          }
        })
        .catch((error) => {
          messageBox.textContent = error_message + ": " + error.message
        })
    })
  })
})()
