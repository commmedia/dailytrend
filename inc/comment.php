<?php
/**
 * @package Daily Trend
 * @author COMM MEDIA NETWORK
 */

?>
<div class="post-comments">
            <h5><div class="glyphsSprite twitter before"></div>Déjanos tu opinión en Twitter.</h5>
                <form class="block" action="https://twitter.com/intent/tweet" name="ComnentBox" target="_blank">
                    <div class="coat inputer">
                        <textarea id="ComnentBoxText" name="text" placeholder="Mensaje..."></textarea>
                        <input type="hidden" value="<?php the_permalink() ?>" name="url" />
                        <input type="submit" class="button block small-12 medium-4" value="Twittear" />
                    </div>
                </form>
            </div>
        </div>
    </div>