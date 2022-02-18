var data = {
  user: 'User'
};

console.log(data);
console.log(typeof data.user);

function welcomeUser(data) {
    return `
        <h1>WELCOME ${data.user}!!!</h1>
    `
}

const welcome = welcomeUser(data);
document.getElementById("content").insertAdjacentHTML("beforebegin", welcome);
