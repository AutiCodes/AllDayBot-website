import {Pterodactyl} from './Pterodactyl.js'


const client = new Pterodactyl.Builder()
    .setURL('https://pterodactyl.app/')
    .setAPIKey('API Key')
    .asAdmin();

client.getServers()
.then(async servers => {
    let server = servers[0];

    console.log(server.toJSON());
}).catch(error => console.log(error));