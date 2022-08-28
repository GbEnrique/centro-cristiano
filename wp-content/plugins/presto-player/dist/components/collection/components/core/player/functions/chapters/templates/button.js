const hideChapters = window?.prestoPlayer?.i18n?.hide_chapters || 'Hide Chapters';
const showChapters = window?.prestoPlayer?.i18n?.show_chapters || 'Show Chapters';
export default `<button class="plyr__controls__item plyr__control" type="button" data-plyr="chapters">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list">
    <line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line>
    <line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line>
    <line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line>
</svg>
<span class="label--pressed plyr__tooltip" role="tooltip">${hideChapters}</span>
<span class="label--not-pressed plyr__tooltip" role="tooltip">${showChapters}</span>
</button>
`;
