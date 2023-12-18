<div>
    <div x-data="{ open: false }" class="members">
        
        <div class="search-container">
            <form class="search-form" action="" method="post">
                @csrf
                <input wire:model.live='search' type="text" placeholder="Ex: Milan Nikolic">

                <i class="fa-solid fa-magnifying-glass"></i>
            </form>

            {{-- <i class="fa-solid fa-magnifying-glass"></i> --}}
            <button x-on:click="open = ! open" class="add-member"><span><i class="fa-solid fa-plus"></i></span>Add new member</button>           
        </div>

        <div x-cloak x-show="open" class="member-create">
            <livewire:member-create />
        </div>

        <div 
        x-data="{showSort:false}"
        class="table-actions">
            <div class="members-text">
                <h1>All members</h1>
                <small>Here's a list of all-time gym members.</small>
            </div>
            
            <div class="action-buttons">
                <button class="filter-button">
                    Filter
                    <i class="fa-solid fa-bars-staggered"></i>
                </button>
                
                <button 
                x-on:click='showSort =! showSort'
                class="sort-button dropdown-btn"><span></span>
                    Sort
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
            </div>

            
            
            <div
            x-cloak
            x-show="showSort"
            x-on:click.away="showSort = false"
            class="sort-container dropdown">

                <div class="sort-list">
                    <li wire:click="changeOrder('desc')" class="sort-item">Newest</li>
                    <li wire:click="changeOrder('asc')" class="sort-item">Oldest</li>
                </div>
            </div>
        </div>
        
        <div class="members-container">
            <table>
                <thead>
                    <tr>
                        <th class="cell-center">#</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>JMBG</th>
                        <th>Email</th>
                        <th>Price</th>
                        <th>Started</th>
                        <th>Ended</th>
                        <th class="cell-center">Activity</th>
                        <th class="row-action"></th>
                    </tr>
                </thead>

                <tr class="separation-row"></tr>
                
                
                <tbody>
                    @foreach ($members as $member)
                        <tr id="row-{{ $member->id }}">
                            <td class="cell-center">{{ $member->id }}</td>
                            <td>{{ $member->first_name }}</td>
                            <td>{{ $member->last_name }}</td>
                            <td>{{ $member->jmbg }}</td>
                            <td>{{ $member->email }}</td>
                            <td>{{ $member->membership_price }}</td>
                            <td>{{ $member->date_started }}</td>
                            <td>{{ $member->date_ended }}</td>
                            
                            <td class="cell-center">@if ($member->is_active == 1) active @else inactive @endif</td>
                            <td class="cell-center"><svg fill="#000000" height="10" width="10" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                                viewBox="0 0 32.055 32.055" xml:space="preserve">
                           <g>
                               <path d="M3.968,12.061C1.775,12.061,0,13.835,0,16.027c0,2.192,1.773,3.967,3.968,3.967c2.189,0,3.966-1.772,3.966-3.967
                                   C7.934,13.835,6.157,12.061,3.968,12.061z M16.233,12.061c-2.188,0-3.968,1.773-3.968,3.965c0,2.192,1.778,3.967,3.968,3.967
                                   s3.97-1.772,3.97-3.967C20.201,13.835,18.423,12.061,16.233,12.061z M28.09,12.061c-2.192,0-3.969,1.774-3.969,3.967
                                   c0,2.19,1.774,3.965,3.969,3.965c2.188,0,3.965-1.772,3.965-3.965S30.278,12.061,28.09,12.061z"/>
                           </g>
                           </svg></td>
                        </tr>
                    @endforeach  
                </tbody>
            </table>
        </div>

       
    </div>
    
</div>
