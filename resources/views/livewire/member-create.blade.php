<div class="member-create-container">
    <i x-on:click="open = false" class="fa-solid fa-x"></i>
    
    {{-- <div class="logo">
        <h1>Gym System<span>.</span></h1>
    </div> --}}

    <h1>Add new member</h1>
    <small>You can fill in new member information below</small>

    <form action="" class="member-create-form">

        <div class="row">
            <div class="label-input">
                <label for="name">First name</label>
                <input type="text">
            </div>
            <div class="label-input">
                <label for="name">Last name</label>
                <input type="text">
            </div>          
        </div>
        

        

        
        <div class="row">
            <div class="label-input">
                <label for="name">Date of birth</label>
                <input type="date">
            </div>
            

            <div class="label-input">
                <label for="name">JMBG</label>
                <input type="text">
            </div>
        </div>

        
        

        <div class="row">
            <div class="label-input-email">
                <label for="name">Email</label>
                <input type="email">
            </div>

            <div class="label-input">
                <label for="name">Membership price</label>
                <input type="text" class="price">
            </div>
        </div>


        <div class="btn-container">
            <button type="submit" name="submit-btn" class="submit-btn">Add member</button>
        </div>

    </form>
</div>
