<?php header("Content-type: text/css"); ?>
.om-header__search{
background-color: var(--white-color);
flex: 1;
width: 585px;
height: 34px;
border-radius: 2px;
display: flex;
align-items: center;
position: relative;
margin-top: 4px;
margin-left: 24px;
}

.om-header__search-input{
flex: 1;
height: 100%;
border: none;
outline: none;
font-size: 1.4rem;
color: var(--text-color);
padding: 0 16px;
border-style: solid;
border-width: thin;
}

/* .header__search-btn {
border: none;
height: 34px;
padding-top: 0;
padding-bottom: 0;
border-radius: 3px;
margin-right: 3px;
outline: none;
cursor: pointer;
} */

.om-header__search-btn {
position: absolute;
right: 10px
}

.om-header__search-btn-icon {
font-size: 1.4rem;
color: var(--black-color);
}

.om-header__search-date {
margin-top: 27px;
margin-left: 24px;
font-size: 1.5rem;
color: var(--text-color);
}