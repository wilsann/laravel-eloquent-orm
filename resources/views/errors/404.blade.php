@extends('layouts.app')

{{-- set title --}}
@section('title', 'Clubs')

@section('content')
<body>
    <section class="h-full w-full border-box lg:px-24 md:px-16 sm:px-8 px-8  transition-all duration-500 linear" style="background-color: #141432;">

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
            .empty-4-7 .btn-back{
                background-color: #524EEE;
                transition: 0.3s;
            }
            .empty-4-7 .btn-back:hover{
                --tw-shadow: inset 0 0px 25px 0 rgba(20, 20, 50, 0.7);
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }
            .empty-4-7 .caption-text{
                color: #707092;
            }       
            @media(min-width: 425px){
                .empty-4-7 .title-text{
                font-size: 40px;
                }
            }      
        </style>
         <div class="empty-4-7 min-h-screen" style="font-family: 'Poppins', sans-serif;">
         <div class="container mx-auto flex sm:pt-14 pt-10 sm:pb-16 pb-8 items-center justify-center flex-col">
             <img class="sm:w-auto w-5/6 sm:mb-2.5 mb-2 object-cover object-center" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Empty%20State/EmptyState4/Empty-4-4.png" alt="">                 
             <div class="text-center w-full">
             <h1 class="title-text text-3xl mb-5 font-semibold text-white">
                 Opss! Something Missing
             </h1>
             <p class="caption-text mb-16 tracking-wide leading-7">
                 The page you’re looking for isn’t found. We<br class="sm:block hidden"> suggest you Back to Homepage.
             </p>
             <div class="flex justify-center">
                 <button class="btn-back inline-flex font-semibold text-white text-lg leading-7 py-4 px-6 rounded-xl focus:outline-none">
                 <a href="{{ url('/') }}">Back to Homepage</a>
                 </button>
             </div>
             </div>
         </div>
         </div>
     </section>    
</body>
@endsection