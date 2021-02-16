<div id="_desktop_user_info">
  {if $logged}
    <ul class="top-menu" >
       <li class="link">
         <a class="logout"  style="font-weight:bold !important;font-size:" href="{$logout_url}" rel="nofollow" title="{l s='Log me out' d='Shop.Theme.Customeraccount'}">{l s='Sign out' d='Shop.Theme.Actions'}</a>
       </li>
       <li class="link">
            <a class="account"  style="font-weight:bold !important;" href="{$my_account_url}" title="{l s='View my customer account' d='Shop.Theme.Customeraccount'}" rel="nofollow"><span>{$customerName}</span></a>
       </li>
    </ul>
    
  {else} 
  <ul class="top-menu" >
       <li class="link">
            <a class="login"  style="font-weight:bold !important;" href="{$my_account_url}" rel="nofollow" title="{l s='Log in to your customer account' d='Shop.Theme.Customeraccount'}">{l s='Sign in' d='Shop.Theme.Actions'}</a>
       </li>
       <li class="link">
            <a class="order-status"  style="font-weight:bold !important;" href="{$urls.base_url}order-history" rel="nofollow" title="{l s='Order Status' d='Shop.Theme.OrderStatus'}">{l s='Order Status' d='Shop.Theme.Actions'}</a>
       </li>
  {/if}
</div>
