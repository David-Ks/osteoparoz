<nav class="nav-bar">
    <div class="nav-with-logos">
        <div class="nav-logo-section-1">
            <img class="nav-logo-1" src="images/nav-logo-1.png">
            <img class="nav-logo-2" src="images/nav-logo-2.png">
        </div>
        <div class="nav-logo-section-2">
        </div>
    </div>
    <div class="nav-btn-div">
        <ul class="nav-btn-ul dropdown">
            <div class="nav-contacts">
                <img class="nav-phone" src="images/phone-for-nav.png">
                {{$contacts->phone}}
                <a href="{{$socials->first()->url}}"><img width="32" height="32" src="{{$socials->first()->icon}}"></a>
                <a href="{{$socials->last()->url}}"><img width="32" height="32" src="{{$socials->last()->icon}}"></a>
            </div>
            <li class="dropbtn">
                <a class="no-dec" href="#"><button class="nav-btn">Մեր մասին</button></a>
                <div class="dropdown-content first-drop">
                    <div class="arrow-up"></div>
                    <a class="no-dec" href="#"><button class="dropdown-content-btn first">Մեր թիմը</button></a><br>
                    <a class="no-dec" href="#"><button class="dropdown-content-btn">Ով ենք մենք</button></a><br>
                    <a class="no-dec" href="#"><button class="dropdown-content-btn">Մեր գործընկերները</button></a><br>
                </div>
            </li>
            <li>
                <a class="no-dec" href="#"><button class="nav-btn">Հիվանդներին</button></a>
                <div class="dropdown-content">
                    <div class="arrow-up"></div>
                    <a class="no-dec" href="#"><button class="dropdown-content-btn first">Հայ ռուսական հետազոտություններ</button></a><br>
                    <a class="no-dec" href="#"><button class="dropdown-content-btn">Ընդհանուր խորհուրդներ</button></a><br>
                    <a class="no-dec" href="#"><button class="dropdown-content-btn">Պրոֆիլակտիկա</button></a><br>
                    <a class="no-dec" href="#"><button class="dropdown-content-btn">Բուժական գիմնաստիկա</button></a><br>
                    <a class="no-dec" href="#"><button class="dropdown-content-btn">Կոտրվածքների ռիսկի գնահատման տեստ</button></a><br>
                </div>
            </li>
            <li>
                <a class="no-dec" href="#"><button class="nav-btn">Մասնագետներին</button></a>
                <div class="dropdown-content">
                    <div class="arrow-up"></div>
                    <a class="no-dec" href="#"><button class="dropdown-content-btn first">Տեղեկատվություն բժիշկների համար</button></a><br>
                    <a class="no-dec" href="#"><button class="dropdown-content-btn">Բժիշկներին</button></a><br>
                    <a class="no-dec" href="#"><button class="dropdown-content-btn">Բուժքույրերին</button></a><br>
                </div>
            </li>
            <li>
                <a class="no-dec" href="#"><button class="nav-btn">Ծառայություններ</button></a>
                <div class="dropdown-content">
                    <div class="arrow-up"></div>
                    <a class="no-dec" href="#"><button class="dropdown-content-btn first">Խորհրդատվություն</button></a><br>
                    <a class="no-dec" href="#"><button class="dropdown-content-btn">Դիագնոստիկա</button></a><br>
                </div>
            </li>
            <li>
                <a class="no-dec" href="#"><button class="nav-btn">Կրթություն</button></a>
                <div class="dropdown-content">
                    <div class="arrow-up"></div>
                    <a class="no-dec" href="#"><button class="dropdown-content-btn first">Միջոցառումներ</button></a><br>
                    <a class="no-dec" href="#"><button class="dropdown-content-btn">Ուսուցողական Ֆիլմեր</button></a><br>
                </div>
            </li>
            <li>
                <a class="no-dec" href="#"><button class="nav-btn">Կապ</button></a>
            </li>
        </ul>
    </div>
</nav>