const express = require("express");
const bodyParser = require("body-parser")
const request = require("request");
const https = require("https");

const app = express();

app.use(express.static("public"));
app.use(bodyParser.urlencoded({ extended: true }));


app.get("/", function(req, res) {
    res.sendFile(__dirname + "/signup.html");
})


app.post("/", function(req, res) {
    const firstName = req.body.fName;
    const lastName = req.body.lName;
    const emailName = req.body.eMail;
    var data = {
        members: [{
                email_address: emailName,
                status: "subscribed",
                merge_fields: {
                    FNAME: firstName,
                    LNAME: lastName

                }
            }

        ]
    }

    const jsonData = JSON.stringify(data);
    const url = "https://us6.api.mailchimp.com/3.0/lists/4f61778321";

    const options = {
        method: "POST",
        auth: "pratik:1d89683099a39df52e3473041c987e8b-us6"
    }

    const request = https.request(url, options, function(response) {
        if (response.statusCode === 200) {
            res.sendFile(__dirname + "/success.html")
        } else {
            res.sendFile(__dirname + "/failure.html")
        }

        response.on("data", function(data) {

            console.log(JSON.parse(data));
        })


    });

    request.write(jsonData);
    request.end();
});

app.post("/failure", function(req, res) {
    res.redirect("/")

})
app.listen(process.env.PORT || 3000, function(req, res) {
    console.log("Port started successfully")
});

//api key 
// 1d89683099a39df52e3473041c987e8b-us6
//list id =