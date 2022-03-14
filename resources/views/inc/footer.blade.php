<footer class="foot text-center">
    <div class="foot-header">
        <div class="footer-logo">
            <img src="images/Ost-center-logo.png">
        </div>
    	<ul class="foot-btns">
    		<li class="ft-btn"><a href="#" class="no-dec">Մեր մասին</a></li>
    		<li class="ft-btn"><a href="#" class="no-dec">Մեր թիմը</a></li>
    		<li class="ft-btn"><a href="#" class="no-dec">Տեսասրահ</a></li>
    		<li class="ft-btn"><a href="#" class="no-dec">Նորություններ</a></li>
    		<li class="ft-btn"><a href="#" class="no-dec">Կրթություն</a></li>
    		<li class="ft-btn"><a href="#" class="no-dec">Ծառայություններ</a></li>
    	</ul>
    </div>

    <div class="foot-body asdf">
    	<div class="mapouter">
            <div class="gmap_canvas">
                <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Aleq Manukyan 22&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            </div>
        </div>
        <div class="footer-form">
            <div class="footer-form-head">
                <div class="address">
                    <img class="point-img" width="21" height="21" src="images/point.png">
                    <div class="address-last">
                        ք․ Երևան <br> {{$contacts->address}} <!-- harca ????? -->
                    </div>
                </div>
                <div class="contacts">
                    <img class="phone-img" width="24" src="images/phone.png"> {{$contacts->phone}}
                </div>
            </div>
            <div class="soc-sites">
                <a href="{{$socials->first()->url}}"><img width="32" height="32" src="{{$socials->first()->icon}}"></a>
                <a href="{{$socials->last()->url}}"><img width="32" height="32" src="{{$socials->last()->icon}}"></a>
            </div>
            <div class="footer-form-body">
                <form>
                    <div class="mb-3 flex">
                      <input class="form-control form-input h-50px w-48 mr-2p" placeholder="անվանում">
                      <input class="form-control form-input h-50px w-48" placeholder="Էլ․հասցե">
                    </div>
                    <div class="mb-3">
                      <textarea class="form-control h-100 form-input" rows="6" placeholder="Բովանդակություն"></textarea>
                    </div>
                    <button class="send-btn" type="submit">Ուղարկել</button>
                </form>
            </div>
        </div>
    </div>
    <div class="footer-footer">
        2022 Osteoporosis Center. am All rights reserved. Design by yweb
    </div>
</footer>
<a class="no-dec" id="go-back" style="display: none;" href="#"><div class="go-back">∧</div></a>
<script type="text/javascript" src="js/main.js"></script>