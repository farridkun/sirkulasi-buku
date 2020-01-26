<div class="card-header">
    <div class="heading-elements">
        <select name="sortColumn" id="books-sort" class="select-picker {if $activeLanguage->isRTL()}pl-2{else}pr-2{/if} d-tc">
            <option value="Issues.issueDate" data-order="DESC"{if $smarty.session.issueSortingOrder == 'DESC' and $smarty.session.issueSortingColumn == 'Issues.issueDate'} selected{/if}>{t}Issue Date Descending{/t}</option>
            <option value="Issues.issueDate" data-order="ASC"{if $smarty.session.issueSortingOrder == 'ASC' and $smarty.session.issueSortingColumn == 'Issues.issueDate'} selected{/if}>{t}Issue Date Ascending{/t}</option>
            <option value="Issues.expiryDate" data-order="DESC"{if $smarty.session.issueSortingOrder == 'DESC' and $smarty.session.issueSortingColumn == 'Issues.expiryDate'} selected{/if}>{t}Expiry Date Descending{/t}</option>
            <option value="Issues.expiryDate" data-order="ASC"{if $smarty.session.issueSortingOrder == 'ASC' and $smarty.session.issueSortingColumn == 'Issues.expiryDate'} selected{/if}>{t}Expiry Date Ascending{/t}</option>
            <option value="Issues.returnDate" data-order="DESC"{if $smarty.session.issueSortingOrder == 'DESC' and $smarty.session.issueSortingColumn == 'Issues.returnDate'} selected{/if}>{t}Return Date Descending{/t}</option>
            <option value="Issues.returnDate" data-order="ASC"{if $smarty.session.issueSortingOrder == 'ASC' and $smarty.session.issueSortingColumn == 'Issues.returnDate'} selected{/if}>{t}Return Date Ascending{/t}</option>
        </select>
        <select name="perPage" id="countPerPage" class="select-picker d-tc">
            {foreach from=$siteViewOptions->getOption("issuesPerPage")->getListValues() key=key item=value}
                <option value="{$key}"{if ($smarty.session.issuePerPage == null and strcmp($key,$siteViewOptions->getOption("issuesPerPage")->getValue()) === 0) or strcmp($key,$smarty.session.issuePerPage) === 0} selected{/if}>{t count=$value 1=$value plural="%1 Books"}1 Issue{/t}</option>
            {/foreach}
        </select>
    </div>
</div>
<table class="table table-striped table-bordered table-responsive">
    <thead>
        <tr>
            <th>{t}Book{/t}</th>
            <th>{t}Issue To{/t}</th>
            <th class="text-center">{t}Issue Date{/t}</th>
            <th class="text-center">{t}Expiry Date{/t}</th>
            <th class="text-center">{t}Return Date{/t}</th>
            <th class="text-center">{t}Penalty{/t}, {$siteViewOptions->getOptionValue("priceCurrency")}</th>
            <th style="width: 110px;" class="text-center">{t}Status{/t}</th>
            <th style="width: 200px;" class="text-center">{t}Actions{/t}</th>
        </tr>
    </thead>
    <tbody>
        {if isset($issues) and $issues != null}
            {foreach from=$issues item=issue name=issue}
                <tr>
                    <td>
                        <a href="{$routes->getRouteString("bookEdit",["bookId"=>$issue->getBook()->getId()])}">{$issue->getBook()->getTitle()}</a>
                    </td>
                    <td>
                        {if $issue->getUser()}
                            <a href="{$routes->getRouteString("userEdit",["userId"=>$issue->getUser()->getId()])}">{$issue->getUser()->getFirstName()} {$issue->getUser()->getLastName()}</a>
                        {/if}
                    </td>
                    <td class="text-center">
                        {$issue->getIssueDate()|date_format:$siteViewOptions->getOptionValue("dateFormat")}
                    </td>
                    <td class="text-center">
                        {$issue->getExpiryDate()|date_format:$siteViewOptions->getOptionValue("dateFormat")}
                    </td>
                    <td class="book-returned-date text-center">
                        {$issue->getReturnDate()|date_format:$siteViewOptions->getOptionValue("dateFormat")}
                    </td>
                    <td class="text-center">
                        {$issue->getPenalty()}
                    </td>
                    <td class="book-status text-center">
                        <span class="badge {if $issue->isLost()}badge-danger{elseif $issue->getReturnDate()}badge-success{/if}">
                             {if $issue->isLost()}
                                 {t}lost{/t}
                             {elseif $issue->getReturnDate()}
                                 {t}returned{/t}
                             {/if}
                        </span>
                    </td>
                    <td class="text-center">
                        {if $issue->getReturnDate() == null}
                            <a href="{$routes->getRouteString("bookSetReturned",["issueId"=>$issue->getId()])}" class="btn btn-outline-info btn-sm {if $activeLanguage->isRTL()}ml-1{else}mr-1{/if} return-book" data-container="body" data-toggle="tooltip" title="{t}Return Book{/t}"><i class="fa fa-retweet"></i></a>
                        {/if}
                        <span data-container="body" data-toggle="tooltip" title="{t}Notify Delayed Members{/t}" class="{if $activeLanguage->isRTL()}ml-1{else}mr-1{/if}">
                        <a href="#" class="btn btn-outline-info btn-sm" data-target="#userSendEmailModal" data-book="{$issue->getBook()->getId()}" data-user="{if $issue->getUser()}{$issue->getUser()->getId()}{/if}" data-toggle="modal"><i class="fa fa-send"></i></a>
                        </span>

                        <a href="{$routes->getRouteString("issueEdit",["issueId"=>$issue->getId()])}" class="btn btn-outline-info btn-sm {if $activeLanguage->isRTL()}ml-1{else}mr-1{/if}" data-container="body" data-toggle="tooltip" title="{t}Edit{/t}"><i class="fa fa-pencil"></i></a>

                        <a href="{$routes->getRouteString("bookSetLost",["issueId"=>$issue->getId()])}" class="btn btn-outline-info btn-sm {if $activeLanguage->isRTL()}ml-1{else}mr-1{/if} lost-book" data-lost="{if $issue->isLost()}true{else}false{/if}" data-container="body" data-toggle="tooltip" title="{if $issue->isLost()}{t}Book Not Lost{/t}{else}{t}Book Is Lost{/t}{/if}"><i class="fa fa-times"></i></a>
                        <div class="dropdown d-inline" data-trigger="hover" data-toggle="tooltip" title="{t}Delete{/t}">
                            <button class="btn btn-outline-info btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-trash-o"></i>
                            </button>
                            <ul class="dropdown-menu {if $activeLanguage->isRTL()}dropdown-menu-left{else}dropdown-menu-right{/if}">
                                <li class="text-center">{t}Do you really want to delete?{/t}</li>
                                <li class="divider"></li>
                                <li class="text-center">
                                    <button class="btn btn-outline-secondary delete-issue" data-url="{$routes->getRouteString("issueDelete",["issueId"=>$issue->getId()])}">
                                        <i class="fa fa-trash-o"></i> {t}Delete{/t}
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
            {/foreach}
        {/if}
    </tbody>
</table>
{include "admin/general/pagination.tpl"}