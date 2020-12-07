<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <div>
        <img src="/svg/list.svg"alt="" style="height: 100px">
    </div>

    <div class="mt-8 text-2xl">
        Welcome to your online course registration system !
    </div>

    <div class="mt-6 text-gray-500">
        The student online course registration system allows each student to register for different courses based on the number of open spots.
        They will either be successfully registered or be placed on a waitinglist.
    </div>
</div>

<div class="bg-opacity-25">

    <form action="/upload" method="post">
    @csrf
        <div style="width:15%;float:left;display: flex;">
            <button class="d-flex">
                <img src="/svg/plus.svg"alt="" style="height: 40px;margin:25px;">
            </button>
        </div>

        <div style="margin-left:15%">
            <label for="course_id">Course ID : </label>
            <input id="course_id" name = "course_id" type="course_id" style="border-width: thin;">
            <label for="description" style="margin-left: 10px;margin-buttom:100px;" >Course description : </label>
            <textarea id="description" type="description" name = "description" style="border-width: thin;height: 50px;width:500px;resize: none;border-radius: 4px; margin-top:15px;"></textarea>
        </div>

        </form>
</div>
