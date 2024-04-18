<?php $__env->startSection('main-content'); ?>

<style>
    .nested-accordion {
      margin-top: 0.5em;
      cursor: pointer;
      width: 95%;
      margin: 0 auto;
      border-bottom: 1px solid rgb(214, 207, 207);
    }

    .nested-accordion h2 {
      padding: 0 0.5em;
      text-align: left;
      font-weight: 400;
    }

    .nested-accordion .comment {
      line-height: 1.5;
    }

    .nested-accordion h2 {
      color: #47a3da;
    }

    .nested-accordion h2:after {
      content: "+";
      padding-right: 0.25em;
      color: #becbd2;
      font-size: 20px;
      font-weight: 500;
      font-family: "Lucida Console", Monaco, monospace;
      position: absolute;
      right: 0;
    }

    .nested-accordion {
      position: relative;
      padding: 6px 0px;
    }

    .nested-accordion h2.selected {
      color: black;
      background: #f3f3f3;
    }

    .nested-accordion h2.selected:after {
      content: "-";
    }

    .nested-accordion .comment {
      color: #768e9d;
      border: none;
    }

    .nested-accordion h2 {
      color: black;
    }

    .dropdown-arrow:after {
      content: "\25BC";
      /* Down arrow */
      padding-left: 0.25em;
    }
  </style>

<div class="container mx-auto mt-8">
    <div class="relative rounded-full flex justify-center items-center w-[30%]  ">
      <!-- Search Icon -->
      <div
        class="absolute inset-y-0 left-0 bg-black  rounded-full flex items-center pointer-events-none justify-center h-[40px] w-[40px]">
        <svg class="w-6 h-6 text-white text-center" fill="none" stroke="currentColor" viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M21 21l-4.567-4.568M4 12a8 8 0 018-8 8 8 0 018 8 8 8 0 01-8 8 8 8 0 01-8-8z"></path>
        </svg>
      </div>
      <!-- Input Field -->
      <input
        class="block w-full  py-2 border-none focus:border-transparent placeholder:text-gray-800 bg-[#efefef] rounded-full  pl-12  focus:outline-none placeholder:font-light placeholder:text-sm"
        type="text" placeholder="Search Product" />
    </div>
  </div>


  <div class="border-[1px] mt-4 border-black"></div>
  <div class="container mx-auto mt-2">
    <ul class="w-full flex justify-between">
      <li>
        <a href="#"
          class="bg-[#f3f3f3] rounded-full text-xs pr-14 pl-3 py-[4px] font-semibold text-left block mb-1">iPhone</a>
        <ul class=" flex flex-col gap-1">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><a href=""
                    class="text-[10px] pl-4 hover:pl-4 hover:bg-red-100 hover:font-medium
                    hover:w-full hover:block hover:px-2 px-2 py-1 hover:rounded-full rounded-full transition-all duration-300 block hover:text-red-600 "><?php echo e($product->title); ?></a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </li>
      


    </ul>
  </div>

<?php $__env->stopSection(); ?>





<?php echo $__env->make('home.layouts.master-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\laragon\www\eccomerce-laravel-mobile-active\resources\views/home/mega_menu.blade.php ENDPATH**/ ?>