document.addEventListener("DOMContentLoaded", function () {
    const chatIcon = document.createElement("div");
    chatIcon.innerHTML = "💬";
    chatIcon.style.cssText = "position:fixed;bottom:20px;right:20px;background:#4f46e5;color:#fff;padding:12px;border-radius:50%;cursor:pointer;box-shadow:0 4px 10px rgba(0,0,0,0.3);";
    document.body.appendChild(chatIcon);

    const chatBox = document.createElement("div");
    chatBox.style.cssText = "position:fixed;bottom:80px;right:20px;width:300px;max-height:400px;background:#fff;border-radius:8px;box-shadow:0 4px 20px rgba(0,0,0,0.3);padding:10px;overflow:auto;display:none;flex-direction:column;gap:5px;font-family:sans-serif;";
    document.body.appendChild(chatBox);

    const input = document.createElement("input");
    input.type = "text";
    input.placeholder = "Escribe un mensaje...";
    input.style.cssText = "width:100%;padding:8px;border:1px solid #ccc;border-radius:4px;";
    chatBox.appendChild(input);

    const messages = document.createElement("div");
    messages.style.cssText = "flex:1;overflow-y:auto;max-height:300px;margin-bottom:8px;";
    chatBox.insertBefore(messages, input);

    chatIcon.onclick = () => {
        chatBox.style.display = chatBox.style.display === "none" ? "flex" : "none";
    };

    input.addEventListener("keydown", async (e) => {
        if (e.key === "Enter" && input.value.trim() !== "") {
            const userMessage = input.value;
            appendMessage("Tú", userMessage);
            input.value = "";

            const res = await fetch("/chatbot", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content"), // Aquí agregas el token CSRF
                },
                body: JSON.stringify({ message: userMessage }),
            });

            const data = await res.json();
            appendMessage("Bot", data.reply);
        }
    });

    function appendMessage(sender, text) {
        const msg = document.createElement("div");
        msg.textContent = `${sender}: ${text}`;
        msg.style.cssText = "padding:5px;border-radius:4px;";
        if (sender === "Bot") {
            msg.style.background = "#e0e7ff";
        } else {
            msg.style.background = "#d1fae5";
        }
        messages.appendChild(msg);
        messages.scrollTop = messages.scrollHeight;
    }
});
