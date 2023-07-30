const signInOutContainer = document.querySelector('.container');
const loginOption = document.querySelector('.login-option');
const singUpToggle = document.querySelector('#singUpToggle');
const singInToggle = document.querySelector('#singInToggle');
const transRight = document.querySelector('.transRight');
const transLeft = document.querySelector('.transLeft');
const adminUserid = document.querySelector('.adminUserid');
const adminHeader = document.querySelector('.adminHeader');

//admin and student login
const adminBtn = document.querySelector('.admin-btn');
const studentBtn = document.querySelector('.student-btn');

const sigin_In = document.querySelector('.sigin_In');
const sigin_Up = document.querySelector('.sigin_Up');


singUpToggle.addEventListener('click', ()=>{
    transLeft.classList.add('active')
    transRight.classList.add('active');
    loginOption.classList.remove('active')
});

singInToggle.addEventListener('click', ()=>{
    transLeft.classList.remove('active')
    transRight.classList.remove('active')
});

adminBtn.addEventListener('click', ()=>{
    signInOutContainer.classList.add('active');
    loginOption.classList.remove('active');

    // let adminHeader1 = ` <h1> <span style="color: black;">Admin</span> Login</h1>`

    let adminuserid = `
    
    <form action="./admin.php" method="POST">
        <h1 class="adminHeader"> <span style="color: black;">Admin</span> Login</h1>
            <div class="name-field adminUserid">
                <i class="fa-solid fa-user"></i>
                <input type="text" placeholder="Admin Id" name='email' required>
            </div>
            <div class="pass-field">
                <i class="fa-solid fa-lock"></i>
                <input type="password" placeholder="Password" name='password' required>
            </div>
            <div class="remember-pass">
                <div class="pass">
                    <p><a href="#">Forget Password?</a></p>
                </div>
            </div>
            <div class="signInOut-btn sigin_In">
                <button>Sigin in</a>
            </div>
    </form>
        `;
    transLeft.innerHTML = adminuserid;
    transRight.style.display = 'none';

    loginOption.style.display = 'none'
    
});
studentBtn.addEventListener('click', ()=>{
    signInOutContainer.classList.add('active');
    loginOption.classList.remove('active');
    loginOption.style.display = 'none'
    
    
});
