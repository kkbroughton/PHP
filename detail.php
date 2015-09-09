<?php include("inc/products.php"); 
    if (isset($_GET["id"])){
        $productID = $_GET["id"];
        if(isset($products[$productID])){
            $product = $products[$productID];
        } else {
            echo "We have an invalid ID.";
        }
    } else {
        echo "We have no ID.";
    }
    if(!isset($product)){
        if(!isset($product["sizes"])){
            header("Location: shirts.php");
        } else {
            header("Location: guns.php");
        }
        exit();
    }
    if(isset($product["sizes"])){
        $section = "shirts";
    }
    if(isset($product["desc"])){
        $section = "guns";
    }
    $pageTitle = $product["name"];
    include("inc/header.php"); ?>
        <div class="section page">
            <div class="wrapper">
                <div class="breadcrumb">
                    <?php if(isset($product["sizes"])){; ?>
                        <a href="shirts.php">Shirts</a> &gt;
                    <?php } ?>
                    <?php if(isset($product["desc"])){; ?>
                        <a href="guns.php">Guns</a> &gt;
                    <?php } ?>
                    <?php echo $product["name"] ?>
                </div>
                <div class="shirt-picture">
                    <span>
                        <img src="<?php echo $product["img"]; ?>" alt="<?php echo $product["name"]; ?>">
                    </span>
                </div>
                <div class="shirt-details">  
                    <h1>
                        <span class="price">$<?php echo $product["price"]; ?></span><?php echo $product["name"]; ?>
                    </h1>
                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="<?php echo $product["paypal"]; ?>">
                        <input type="hidden" name="item_name" value="<?php echo $product["name"]; ?>">
                        <table>
                            <tr>
                                <th>
                                    <?php if(isset($product["sizes"])){; ?>
                                          <input type="hidden" name="on0" value="Size">
                                          <label for="os0">Size</label>
                                    <?php } ?>
                                    <?php if(isset($product["desc"])){; ?>
                                          <input type="hidden" name="on0" value="Desc">
                                            <label for="os0">Description</label>
                                    <?php } ?>
                                </th>
                                <td>
                                    <?php if(isset($product["sizes"])){; ?>
                                          <select name="os0" id="os0">
                                            <?php foreach($product["sizes"] as $size) {; ?>
                                                <option value="<?php echo $size; ?>"><?php echo $size; ?></option>
                                            <?php } ?>
                                          </select> 
                                    <?php } ?>
                                    <?php if(isset($product["desc"])){; ?>
                                           <p><?php echo $product["desc"]; ?></p>
                                    <?php } ?>
                                </td>
                            </tr>
                        </table>
                        <!--<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">-->
                        <span class='st_sharethis_large' displayText='ShareThis'></span>
                        <span class='st_facebook_large' displayText='Facebook'></span>
                        <span class='st_twitter_large' displayText='Tweet'></span>
                        <span class='st_linkedin_large' displayText='LinkedIn'></span>
                        <span class='st_pinterest_large' displayText='Pinterest'></span>
                        <span class='st_email_large' displayText='Email'></span>
                        <?php if(isset($product["sizes"])){; ?>
                            <p class="note-designer">* All shirts are not designed by Kim Broughton</p>
                        <?php } ?>
                    </form>
                </div>
            </div>
        </div>
<?php include("inc/footer.php"); ?>