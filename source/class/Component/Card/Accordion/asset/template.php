
    <article class="material-card Pink"  style="height: {{{height}}}">
        <<?php echo $titleTag;?>>
            <span>{{{title}}}</span>
            <strong>
                <i class="fa fa-fw fa-star"></i>
                {{{subTitle}}}
            </strong>
        </<?php echo $titleTag;?>>
        <div class="mc-content">
            <div class="img-container">
                <img class="" src="{{{image}}}">
            </div>
            <div class="mc-description">
                {{{description}}}
            </div>
        </div>
        <a class="mc-btn-action">
            <i class="fa fa-bars"></i>
        </a>
        <div class="mc-footer" style="overflow: hidden; height: {{{footerHeight}}}">
            {{{footer}}}
        </div>
    </article>

