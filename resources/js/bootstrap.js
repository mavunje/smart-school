import Echo from 'laravel-echo';

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: process.env.MIX_PUSHER_APP_KEY,
    cluster: process.env.MIX_PUSHER_APP_CLUSTER,
    encrypted: true
});

Echo.channel('chat')
    .listen('MessageSent', (e) => {
        console.log(e.message); // Display the received message in the console

        // Display the message in the UI
        const messageList = document.getElementById('message-list');
        const listItem = document.createElement('li');
        listItem.textContent = e.message; // Change this if you want to show more details
        messageList.appendChild(listItem);
    });
