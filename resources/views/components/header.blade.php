<div class="bg-white border rounded-xl py-6 px-8 flex items-center justify-between">
                    
    <div class="flex items-center gap-x-4">
        <span id="menu-bar" class="cursor-pointer block lg:hidden">
          <i class="fa-solid fa-bars text-primary-color md:text-xl text-md"></i>
        </span>
        <h3 class="font-bold md:text-md text-sm text-primary-color">الصفحة الرئيسية {{$slot}}</h3>
    </div>

    <div class="relative ml-3">
        <div>
          <button type="button" id="profile-img" class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
            <span class="absolute -inset-1.5"></span>
            <span class="sr-only">Open user menu</span>
            <img class="h-8 w-8 rounded-full" src="{{ asset('img/profile.png') }}" alt="">
          </button>
        </div>

        <div id="profile-dropdown" class="absolute flex-col hidden left-0 z-10 mt-2 w-[240px] origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
          
          <div class="px-4 py-4">
            @if(auth()->check())
              <h2 class="font-bold text-sm">{{ auth()->user()->name }}</h2>
            @endif       
          </div>
          <!-- Active: "bg-gray-100", Not Active: "" -->
          <a href="{{ route('profile.show') }}" class="border-t duration-300 hover:bg-gray-50 flex items-center font-semibold gap-x-2 px-4 py-2 text-xs text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">
            <span class="border border-black w-[23px] h-[23px] flex items-center justify-center rounded-full">
              <i class="fa-solid fa-user text-[10px]"></i>
            </span>
            الحساب الشخصي
          </a>
          <a href="{{ route('password.change') }}" class="flex items-center border-t duration-300 hover:bg-gray-50 gap-x-2 px-4 py-2 text-xs text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">
            <span class="border border-black w-[23px] h-[23px] flex items-center justify-center rounded-full">
              <i class="fa-solid fa-lock-open text-[10px]"></i>
            </span>
            تغيير كلمة السر
          </a>
          <p class="border-t">
            <form action="{{ route('logout') }}" method="post">
              @csrf
              <button type="submit" class="w-full flex gap-x-2 duration-300 hover:bg-gray-50 items-center px-4 py-2 text-xs text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">
                <span class="border border-black w-[23px] h-[23px] flex items-center justify-center rounded-full">
                  <i class="fa-solid fa-right-from-bracket text-[10px]"></i>
                </span>
                تسجيل الخروج

              </button>
            </form>
          </p>
        </div>
    </div>

</div>  

<script>
  let open = false;
  const profile_img = document.getElementById('profile-img');
  const profile_dropdown = document.getElementById('profile-dropdown');

  profile_img.addEventListener('click',()=>{
    if(open){
      profile_dropdown.classList.remove('flex');
      profile_dropdown.classList.add('hidden');
    }else{
      profile_dropdown.classList.remove('hidden');
      profile_dropdown.classList.add('flex');
    }

    open = !open;
  })
</script>
