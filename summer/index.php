<?php  session_start();
require_once('../config.php'); 
require_once('./Functions/functions.php'); 
needLoged();
get_header();
?>



    <!-- this is header part -->
    <header class="mb-8 lg:h-screen">
        <section class="flex flex-col-reverse lg:flex-row justify-between text-center items-center bg-[#F9F6E2]">
            <div class="mt-4 lg:m-auto p-6 flex-1">
                <h4 class="text-2xl">---SALE FEVER---</h4>
                <h1 class="text-3xl lg:text-6xl my-7 font-bold">Purchase TK 200 or <br> above & get <span class="text-[#E527B2]"> 20% off</span></h1>
                <div class="flex gap-4 justify-center items-center">
                    <p class="text-lg lg:text-2xl">Use Promo Code</p>
                    <button class="bg-[#E527B2] px-6 py-3 rounded-lg text-white text-lg font-bold lg:text-2xl">SELL200</button>
                </div>
            </div>
            <div class="flex-1">
                <img class="" src="./images/Summer 1.png" alt="">
            </div>
        </section>
    </header>
    <!-- this is main part -->
    <main class="m-auto lg:mx-14 mt-16">
        <section class="w-full h-auto flex flex-col lg:flex-row">
                <div class="w-auto lg:w-3/4">
                    <!--coloumn first row -->
                    <div class="">
                        <h1 class="text-center lg:text-left lg:ml-16 text-5xl">Kitchenware </h1>
                        <!-- first row  -->
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-16 justify-center my-10 mx-auto lg:mx-16">
                           <!-- <h2 class="card-title">K. Accessories</h2>  -->
                            <div onclick="clickContainer(this)"  id="card_all" class="card w-auto bg-base-100 shadow-xl cursor-pointer">
                                <figure class="px-10 pt-10">
                                  <img src="./images/prod1.png" alt="Shoes" class="rounded-xl shadow-xl mb-5 p-6" />
                                </figure>  
                                <div class="card-body items-center text-center"> 
                                    <div class="rating">
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                      </div>
                                    <h2 class="card-title">K. Accessories</h2>                     
                                  <p><span id="productAmount">39.00</span>TK</p>
                                </div>
                              </div> 
                              <div onclick="clickContainer(this)"  id="card_all" class="card w-auto bg-base-100 shadow-xl cursor-pointer">
                                <figure class="px-10 pt-10">
                                  <img src="./images/prod2.png" alt="Shoes" class="rounded-xl px-2 py-4 shadow-xl mb-5" />
                                </figure>  
                                <div class="card-body items-center text-center"> 
                                    <div class="rating">
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                      </div>
                                    <h2 class="card-title">K. Accessories</h2>                     
                                  <p onclick="getAmount(this)"><span id="productAmount">25.00</span>TK</p>
                                </div>
                              </div> 
                              <div  onclick="clickContainer(this)" id="card_all" class="card w-auto bg-base-100 shadow-xl cursor-pointer">
                                <figure class="px-10 pt-10">
                                  <img src="./images/prod3.png" alt="Shoes" class="rounded-xl py-5 px-2 shadow-xl mb-5" />
                                </figure>  
                                <div class="card-body items-center text-center"> 
                                    <div class="rating">
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                      </div>
                                    <h2 class="card-title">Home Cooker</h2>                     
                                  <p><span id="productAmount">49.00</span>TK</p>
                                </div>
                              </div>                                                             
                        </div>
                        <!-- second row -->
                        <h1 class="text-center lg:text-left lg:ml-16 text-5xl">Sportswear </h1>
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-16 justify-center my-10 mx-auto lg:mx-16">
                            <div onclick="clickContainer(this)"  class="card w-auto bg-base-100 shadow-xl cursor-pointer">
                                <figure class="px-10 pt-10">
                                  <img src="./images/prod4.png" alt="Shoes" class="rounded-xl px-11 py-9 shadow-xl mb-5" />
                                </figure>  
                                <div class="card-body items-center text-center"> 
                                    <div class="rating">
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                      </div>
                                    <h2 class="card-title">Sports Back Cap</h2>                     
                                  <p><span id="productAmount">49.00</span>TK</p>
                                </div>
                              </div> 
                              <div  onclick="clickContainer(this)" class="card w-auto bg-base-100 shadow-xl cursor-pointer">
                                <figure class="px-10 pt-10">
                                  <img src="./images/prod5.png" alt="Shoes" class="rounded-xl px-11 py-4 shadow-xl mb-5" />
                                </figure>  
                                <div class="card-body items-center text-center"> 
                                    <div class="rating">
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                      </div>
                                    <h2 class="card-title">Full Jersey Set</h2>                     
                                  <p><span id="productAmount">69.00</span>TK</p>
                                </div>
                              </div> 
                              <div  onclick="clickContainer(this)" class="card w-auto bg-base-100 shadow-xl cursor-pointer">
                                <figure class="px-10 pt-10">
                                  <img src="./images/prod6.png" alt="Shoes" class="rounded-xl px-11 py-6 shadow-xl mb-5" />
                                </figure>  
                                <div class="card-body items-center text-center"> 
                                    <div class="rating">
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                      </div>
                                    <h2 class="card-title">Sports cates</h2>                     
                                  <p><span id="productAmount">159.00</span>TK</p>
                                </div>
                              </div>                                                             
                        </div>
                        <!-- third row -->
                        <h1 class="text-center lg:text-left lg:ml-16 text-5xl">Furniture </h1>
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-16 justify-center my-10 mx-auto lg:mx-16">
                            <div onclick="clickContainer(this)"  class="card w-auto bg-base-100 shadow-xl cursor-pointer">
                                <figure class="px-10 pt-10">
                                  <img src="./images/prod7.png" alt="Shoes" class="rounded-xl px-11 py-8 shadow-xl mb-5" />
                                </figure>  
                                <div class="card-body items-center text-center"> 
                                    <div class="rating">
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                      </div>
                                    <h2 class="card-title">Single Relax Chair</h2>                     
                                  <p><span id="productAmount">185.00</span>TK</p>
                                </div>
                              </div> 
                              <div onclick="clickContainer(this)"  class="card w-auto bg-base-100 shadow-xl cursor-pointer">
                                <figure class="px-10 pt-10">
                                  <img src="./images/prod8.png" alt="Shoes" class="rounded-xl px-11 py-6 shadow-xl mb-5" />
                                </figure>  
                                <div class="card-body items-center text-center"> 
                                    <div class="rating">
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                      </div>
                                    <h2 class="card-title">Children play</h2>                     
                                  <p><span id="productAmount">299.00</span>TK</p>
                                </div>
                              </div> 
                              <div  onclick="clickContainer(this)" class="card w-auto bg-base-100 shadow-xl cursor-pointer">
                                <figure class="px-10 pt-10">
                                  <img src="./images/prod9.png" alt="Shoes" class="rounded-xl px-11 py-10 shadow-xl mb-5" />
                                </figure>  
                                <div class="card-body items-center text-center"> 
                                    <div class="rating">
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                      </div>
                                    <h2 class="card-title">Flexible Sofa</h2>                     
                                  <p><span id="productAmount">339.00</span>TK</p>
                                </div>
                              </div>                                                             
                        </div>
                    </div>

                </div>
            <!-- second div -->

            <!-- right coloumn -->
            <div class="w-auto lg:w-1/4 m-6 text-center lg:text-left">
               <div class="shadow-xl p-4 rounded">
                <h2 class="text-2xl">Have coupon?</h2>
                <div class="flex flex-row my-4">
                    <input id="inputField" class="h-10 relative rounded-l-lg w-full rounded-r-lg" style="border: 1px solid rgba(0, 0, 0, 0.203);" type="text" placeholder="Coupon code">
                    <button id="submitButton" class="bg-[#e527b257] p-2 absolute rounded-r-lg text-white right-10 lg:right-24" disabled>Apply</button>
                </div>
               </div>

            <div class="shadow-xl p-4 rounded-xl">
              <div id="itemNameList" class="mt-12">

              </div>
              <hr class="my-7">   
            
              <div class="text-2xl">Total Prices:<span id="totalAmount">00.00</span>Tk</div>
              <div class="text-2xl my-5">Discount:<span id="discountAmount">00.00</span>Tk</div>
              <div class="text-2xl">Total:<span id="newtotalAmount">00.00</span>Tk</div>

              <!-- Open the modal using ID.showModal() method -->
              <hr class="mt-7">
             <div>
              <button class=" bg-[#e527b257] px-6 py-4 rounded-md text-white text-2xl mt-9 w-full h-auto" disabled onclick="my_modal_5.showModal()" id="purchButton" >Make Purchase</button>
              <dialog id="my_modal_5" class="modal modal-bottom sm:modal-middle">
              <form method="dialog" class="modal-box text-center">
                  <img class="mx-auto w-auto" src="./images/congo.png" alt="">
                  <h3 class="font-bold text-lg">Congratulations!</h3>
                  <p class="py-4">Your Purchase the product</p>
                  <div class="modal-action text-left">
                  <!-- if there is a button in form, it will close the modal -->
                  <button id="moduleId" class="mx-auto w-auto bg-[#E527B2] text-white px-6 py-4 rounded-md">Go Home</button>
                  </div>
              </form>
              </dialog>
             </div>
            </div>
            </div>
        </section>
    </main>
    <!-- Footer part -->
    <?php 

get_footer();
?>
    <script src="./script.js"></script>
</body>
</html>