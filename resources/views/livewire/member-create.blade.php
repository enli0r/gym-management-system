<div 
    x-init=
    "
        Livewire.on('memberWasCreated', () => {
            open=false;
        }); 
    " 
    class="member-create-container">

    <i x-on:click="open = false" class="fa-solid fa-x"></i>

    <h1>Add new member</h1>
    <small>You can fill in new member information below</small>


    <form wire:submit.prevent="store" action="" enctype="multipart/form-data" method="POST" class="member-create-form">
        @csrf

        <div class="row">
            <div class="label-input">
                <label for="first_name">First name</label>
                <input wire:model='first_name' type="text" name="first_name">
            </div>
            <div class="label-input">
                <label for="last_name">Last name</label>
                <input wire:model='last_name' type="text" name="last_name">
            </div>          
        </div>
        

        

        
        <div class="row">
            <div class="label-input">
                <label for="name">Date of birth</label>
                <input wire:model='date_of_birth' type="date" name="date_of_birth">
            </div>
            

            <div class="label-input">
                <label for="jmbg">JMBG</label>
                <input wire:model='jmbg' type="text" name="jmbg">
            </div>
        </div>

        
        

        <div class="row">
            <div class="label-input-email">
                <label for="email">Email</label>
                <input wire:model='email' type="email" name="email">
            </div>

            <div class="label-input">
                <label for="membership_price">Membership price</label>
                <input wire:model='membership_price' type="text" class="price" name="membership_price">
            </div>
        </div>

        <div class="row">
            <div class="label-input">
                <label for="name">Phone number</label>
                <input wire:model='phone' type="text" name="phone">
            </div>
        </div>

        <div class="btn-container">
            <button type="submit" name="submit-btn" class="submit-btn">Add member</button>
        </div>

    </form>
</div>
