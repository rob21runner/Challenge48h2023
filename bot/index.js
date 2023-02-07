const Discord = require('discord.js'),
    client = new Discord.Client({
        fetchAllMembers: true,
        partials: ["MESSAGE","REACTION"]
    }),
    config = require('./config.json')
client.on('ready', () => {
    console.log('Je suis en ligne!')
    createJson()
    createTemplate()
})

client.on('error', () => {
    console.log('Je suis en ligne!')
    //LogGen("Erreur","Une Erreur est survenue !","#ff3838")
})

client.login(config.token)
client.commands = new Discord.Collection()

premier = true

client.on('message', message => {
    if (message.type !== 'DEFAULT' || message.author.bot) return
    if (message.content.startsWith("λ&co")) {
        if (premier) {
            premier = false
            message.channel.send(new Discord.MessageEmbed()
                .setTitle("Bravo")
                .setAuthor("Lambda Bot","https://cdn.discordapp.com/emojis/809341286800162837.png")
                .setDescription("Bravo <@"+ message.author.id +"> tu as gagné un paquet de Dragibus!")
                .setFooter("Dev by Lambda Corporation")
                .setColor('#9b59b6'))
        }  
    }
    if (message.content.startsWith("λhacker")) {
        const member = message.guild.member(message.author.id)
        member.roles.add("1072465183420710932")
        client.channels.cache.get("1072468802903736340").send("<@1072080475914502144> <@"+ message.author.id +"> a finit!")
    }
})

var analysis = [];
function createJson() {
    names = require('./names.json')
    j = 0
    for (var i = 0; i < 527; i++) {
        var id = j;
        var generatedIp = "192.168." + Math.floor(Math.random() * 256) + "." + Math.floor(Math.random() * 256);
        var customUser = names.firstname[i] + " " + names.lastname[i];
        var customPassword = Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15);
        var breaches = ["SQL injection", "Cross-Site Scripting", "Remote Code Execution", "Denial of Service"];
        var randomBreach = breaches[Math.floor(Math.random() * breaches.length)];
        var details = "The " + randomBreach + " vulnerability has been discovered in the system. It is recommended to patch the system and implement proper security measures to prevent similar incidents in the future.";
        analysis.push({
            id: id,
            ip: generatedIp,
            user: customUser,
            password: customPassword,
            breach: randomBreach,
            details: details
        });
        j++
        if (i == 30) {
            id = j
            j++
            generatedIp = "http://10.13.33.222:1194/login-page-2.php"
            customUser = "XxDylanKillerxX"
            customPassword = "Je suis dylan le Kikoo"
            randomBreach = "Everything is open!!!"
            details = "The " + randomBreach + " vulnerability has been discovered in the system. It is recommended to patch the system and implement proper security measures to prevent similar incidents in the future."
            analysis.push({
                id: id,
                ip: generatedIp,
                user: customUser,
                password: customPassword,
                breach: randomBreach,
                details: details
            });
        }
    }

    //console.log(JSON.stringify(analysis));
}
  

function createTemplate() {
    analysis.forEach(function(i) {
        id = i.id
        ip = i.ip
        user = i.user
        password = i.password
        breach = i.breach
        details = i.details

        title = "Web site analysis #"+i.id
        text = "    - ip : "+ i.ip +"\n    - user : "+ i.user +"\n    - password : "+ i.password +"\n    - breach : "+i.breach +"\n"+details
            
        LogGen(title, text, '#0984e3') 
    })
}

function LogGen(title, message, color) {
    if (color == null) {
        color = "#d3d3d3"
    }
    console.log(message)
    client.channels.cache.get("1072466827663384606").send(new Discord.MessageEmbed()
        .setTitle(title)
        .setAuthor("Lambda Bot","https://cdn.discordapp.com/emojis/809341286149783563.png")
        .setDescription(message)
        .setFooter("Dev by Lambda Corporation")
        .setColor(color)
    )
}