<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Site Title</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="favicon.ico">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <!-- CSS Style Sheets -->
        <!--[if (lt IE 9) & (!IEMobile)]>
            <link href="stylesheets/style-no-mq.min.css" rel="stylesheet">
        <![endif]-->
        <!--[if (gte IE 9) | (IEMobile)]><!-->
          <link href="stylesheets/style-mq.min.css" rel="stylesheet">
        <!--<![endif]-->
        <style type="text/css">
            .sr-title { border-bottom: 1px solid #444; }
        </style>
    </head>
    <body>

        <!-- Add your site or application content here -->
    <div class="wrapper box" style="padding: 30px 0;">
       <h1>My Website Boilerplate</h1>
       <p class="truncate">This is my starting point for vanilla websites based on what I feel are best practices found across the web</p>
        <section>
            <h1>Patterns</h1>  
    
            <!-- <div>
                <h2 class="sr-title">Colors</h2> 
    
            </div> -->

            <!-- <div>
                <h2 class="sr-title">Primary font</h2> 
                <p>Primary font: Verdana, Geneva, sans-serif</p>
                <p><em>Primary font italic: Verdana, Geneva, sans-serif</em></p>
                <p><strong>Primary font bold: Verdana, Geneva, sans-serif</strong></p>
            </div>

            <div>
                <h2 class="sr-title">Secondary font</h2> 
                <p class="font-alt">Secondary font: "Lucida Bright", Georgia, serif</p>
                <p class="font-alt"><em>Secondary font italic: "Lucida Bright", Georgia, serif</em></p>
                <p class="font-alt"><strong>Secondary font bold: "Lucida Bright", Georgia, serif</strong></p>
            </div>  -->   

            <div>
                <h2 class="sr-title">Headings</h2>
                <h1>Heading Level 1</h1>
                <h2>Heading Level 2</h2>
                <h3>Heading Level 3</h3>  
                <h4>Heading Level 4</h4>
                <h5>Heading Level 5</h5> 
                <h6>Heading Level 6</h6>
            </div>

            <div>
                <h2 class="sr-title">Headings with small text</h2>    
                <div>
                    <h1>Heading 1<small> with small text</small></h1>
                    <h2>Heading 2<small> with small text</small></h2>
                    <h3>Heading 3<small> with small text</small></h3>  
                    <h4>Heading 4<small> with small text</small></h4>
                    <h5>Heading 5<small> with small text</small></h5> 
                    <h6>Heading 6<small> with small text</small></h6>
                </div>
            </div>

            <div>
                <h2 class="sr-title">Lead Text (.lead)</h2>    
                <div>
                    <p class="lead">So, setting about it as methodically as men might smoke out a wasps' nest, the Martians spread this strange stifling vapour over the Londonward country. The horns of the crescent slowly moved apart, until at last they formed a line from Hanwell to Coombe and Malden. All night through their destructive tubes advanced.</p>
                </div>
            </div>
            <div>
                <h2 class="sr-title">Heading Group (.hgroup)</h2>    
                <div>
                    <div class="hgroup">
                        <h1>This is the heading group's main heading</h1>
                        <h2>This is the heading group's subheading</h2>
                    </div>
                </div>
            </div>

            <div>
                <h2 class="sr-title">Paragraph</h2>    
                <div>
                    <p>A paragraph (from the Greek paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. The start of a paragraph is indicated by beginning on a new line.</p>
                </div>
            </div>

            <div>
                <h2 class="sr-title">Text Helpers</h2>    
                <div>
                    <p class="align-left">Text Align Left <code>.align-left</code></p>
                    <p class="align-center">Text Align Center <code>.align-center</code></p>
                    <p class="align-right">Text Align Right <code>.align-right</code></p>
                    <p class="uppercase">Text Uppercase <code>.uppercase</code></p>
                </div>
            </div>

            <div>
                <h2 class="sr-title">Blockquote</h2>    
                <div>
                    <blockquote>
                        <p>A block quotation (also known as a long quotation or extract) is a quotation in a written document, that is set off from the main text as a paragraph, or block of text, and typically distinguished visually using indentation and a different typeface or smaller size quotation. </p>
                    </blockquote>
                </div>
            </div>

            <div>
                <h2 class="sr-title">Blockquote</h2>    
                <div>
                    <blockquote>
                        <p>A block quotation (also known as a long quotation or extract) is a quotation in a written document, that is set off from the main text as a paragraph, or block of text, and typically distinguished visually using indentation and a different typeface or smaller size quotation. </p>
                        <cite class="citation">Quote Source</cite>
                    </blockquote>
                </div>
            </div>

            <div>
                <h2 class="sr-title">Pullquote</h2>    
                <div>
                    <blockquote class="pullquote">
                        <p>A pull quote is a quotation or excerpt from an article</p>
                    </blockquote>
                </div>
            </div>

            <div>
                <h2 class="sr-title">Inline Text Elements</h2>    
                <div>
                    <div class="text">
                        <p><a href="#">This is a text link</a></p>

                        <p><strong>Strong is used to indicate strong importance</strong></p>

                        <p><em>This text has added emphasis</em></p>

                        <p>The <b>b element</b> is stylistically different text from normal text, without any special importance</p>

                        <p>The <i>i element</i> is text that is set off from the normal text</p>

                        <p>The <u>u element</u> is text with an unarticulated, though explicitly rendered, non-textual annotation</p>

                        <p><del>This text is deleted</del> and <ins>This text is inserted</ins></p>

                        <p><s>This text has a strikethrough</s></p>

                        <p>Superscript<sup>®</sup></p>

                        <p>Subscript for things like H<sub>2</sub>O</p>

                        <p><small>This small text is small for for fine print, etc.</small></p>

                        <p>Abbreviation: <abbr title="HyperText Markup Language">HTML</abbr></p>

                        <p>Keybord input: <kbd>Cmd</kbd></p>

                        <p><q cite="https://developer.mozilla.org/en-US/docs/HTML/Element/q">This text is a short inline quotation</q></p>

                        <p><cite>This is a citation</cite>

                        </p><p>The <dfn>dfn element</dfn> indicates a definition.</p>

                        <p>The <mark>mark element</mark> indicates a highlight</p>

                        <p><code>This is what inline code looks like.</code></p>

                        <p><samp>This is sample output from a computer program</samp></p>

                        <p>The <var>variarble element</var>, such as <var>x</var> = <var>y</var></p>
                    </div>
                </div>
            </div>

            <div>
                <h2 class="sr-title">Address</h2>    
                <div>
                    <address>Address Name<br>1234 Main St.<br>Anywhere, US 101010<p></p> </address>
                </div>
            </div>

            <div>
                <h2 class="sr-title">Preformatted Text</h2>    
                <div>
                    <pre>   
        P R E F O R M A T T E D T E X T
        ! " # $ % &amp; ' ( ) * + , - . /
        0 1 2 3 4 5 6 7 8 9 : ; &lt; = &gt; ?
        @ A B C D E F G H I J K L M N O
        P Q R S T U V W X Y Z [ \ ] ^ _
        ` a b c d e f g h i j k l m n o
        p q r s t u v w x y z { | } ~ 
        </pre>
                </div>
            </div>

            <div>
                <h2 class="sr-title">Images (.img-rounded, .img-circle, .img-framed)</h2> 
                <img data-src="holder.js/140x140" class="img-rounded" alt="140x140" style="width: 140px; height: 140px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIwAAACMCAYAAACuwEE+AAAFiElEQVR4Xu3XSUtcaxCH8XLAWRRFxIWKE7gRx6Cigl/deQRxQBQcl6JpJXEeQ73QYlyIdS373q77nFVMquuk/vXzPacLMpnMi3CRwCcTKADMJ5OiLCUAGCCYEgCMKS6KAYMBUwKAMcVFMWAwYEoAMKa4KAYMBkwJAMYUF8WAwYApAcCY4qIYMBgwJQAYU1wUAwYDpgQAY4qLYsBgwJQAYExxUQwYDJgSAIwpLooBgwFTAoAxxUUxYDBgSgAwprgoBgwGTAkAxhQXxYDBgCkBwJjiohgwGDAlABhTXBQDBgOmBABjiotiwGDAlABgTHFRDBgMmBIAjCkuigGDAVMCgDHFRTFgMGBKADCmuCgGDAZMCQDGFBfFgMGAKQHAmOKiGDAYMCUAGFNcFAMGA6YEAGOKi2LAYMCUAGBMcVEMGAyYEgCMKS6KAYMBUwKAMcVFMWAwYEoAMKa4KAYMBkwJAMYUF8WAwYApAcCY4qIYMBgwJQAYU1wUAwYDpgQAY4qLYsBgwJRA3oM5PDyU4+NjGRkZkbKysr+Gz2Qysr29LRUVFdLf3y8FBQXy8vIiW1tbcnZ2ln5ub2+XlpaWT4eW6/t9+j+Wo8K8BXNxcSEK4uDgIEU1NjYm5eXlr7EpjKmpKXl8fJSSkhIZHx+XwsJCWV9fl9PTUyktLZX7+/sEqKenRxobGz+MPNf3y9H+zbfJWzDT09Np4dlLQbw9Yfb29uTo6Cj9s/69gnp6ehL9nMKZmJhI4BRQbW2tdHd3y8bGhhQVFcnAwIBcXl7Kzs5OgtXX1yezs7Ou9xsaGjIv67/wgbwFoyeHPlIWFxfl5uYmnSBZMPrz3NxcetT8+vVLrq+vE5CHh4e0+OLi4vRzFpD+rJ9fW1uT8/Nzqaurk9vb2/S5rq4uaW1tTSeV9/0Ubr5deQsmG7SC0dPgLZiVlZX0d5OTk7K8vCx3d3evJ4qiqK+vT+80ikBPHH1k6QmUBfX8/Jza19TUyI8fP/7aqef9FGC+XeHA6LvG6uqqVFZWSnNzs+zv74sC6OzslIaGhnTy6GPm7SMqe8Lob7y+1Opn9BoeHpbq6uoPwXz1foDJcQLvf+N//vyZHi3vL8Wgp1D2kaR/1lNITyD9FjU6OppgzczMpJNHLwXW29v7IZiv3I8TJsdY9HYLCwtydXX1+kjSpWdfhhWJPp4UgJ4W+o4zPz+f3k2amprk9+/fCU1HR4e0tbXJ5uamnJycSFVVVarRXu+/QXne71+I68u3zPtHkp4Q+mL7/lvS23ccBaOPIP2NVlxLS0sJQ/Y9ZXBwMOFRXFqjL8QKZ3d39/UFWb896eV1v3x84dX58x7MP/mVUSx6guilp8l3X7m+33fO878E852BRu8NmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm/3B89OPbW5/bE0AAAAAElFTkSuQmCC">
                <img data-src="holder.js/140x140" class="img-circle" alt="140x140" style="width: 140px; height: 140px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIwAAACMCAYAAACuwEE+AAAFiElEQVR4Xu3XSUtcaxCH8XLAWRRFxIWKE7gRx6Cigl/deQRxQBQcl6JpJXEeQ73QYlyIdS373q77nFVMquuk/vXzPacLMpnMi3CRwCcTKADMJ5OiLCUAGCCYEgCMKS6KAYMBUwKAMcVFMWAwYEoAMKa4KAYMBkwJAMYUF8WAwYApAcCY4qIYMBgwJQAYU1wUAwYDpgQAY4qLYsBgwJQAYExxUQwYDJgSAIwpLooBgwFTAoAxxUUxYDBgSgAwprgoBgwGTAkAxhQXxYDBgCkBwJjiohgwGDAlABhTXBQDBgOmBABjiotiwGDAlABgTHFRDBgMmBIAjCkuigGDAVMCgDHFRTFgMGBKADCmuCgGDAZMCQDGFBfFgMGAKQHAmOKiGDAYMCUAGFNcFAMGA6YEAGOKi2LAYMCUAGBMcVEMGAyYEgCMKS6KAYMBUwKAMcVFMWAwYEoAMKa4KAYMBkwJAMYUF8WAwYApAcCY4qIYMBgwJQAYU1wUAwYDpgQAY4qLYsBgwJRA3oM5PDyU4+NjGRkZkbKysr+Gz2Qysr29LRUVFdLf3y8FBQXy8vIiW1tbcnZ2ln5ub2+XlpaWT4eW6/t9+j+Wo8K8BXNxcSEK4uDgIEU1NjYm5eXlr7EpjKmpKXl8fJSSkhIZHx+XwsJCWV9fl9PTUyktLZX7+/sEqKenRxobGz+MPNf3y9H+zbfJWzDT09Np4dlLQbw9Yfb29uTo6Cj9s/69gnp6ehL9nMKZmJhI4BRQbW2tdHd3y8bGhhQVFcnAwIBcXl7Kzs5OgtXX1yezs7Ou9xsaGjIv67/wgbwFoyeHPlIWFxfl5uYmnSBZMPrz3NxcetT8+vVLrq+vE5CHh4e0+OLi4vRzFpD+rJ9fW1uT8/Nzqaurk9vb2/S5rq4uaW1tTSeV9/0Ubr5deQsmG7SC0dPgLZiVlZX0d5OTk7K8vCx3d3evJ4qiqK+vT+80ikBPHH1k6QmUBfX8/Jza19TUyI8fP/7aqef9FGC+XeHA6LvG6uqqVFZWSnNzs+zv74sC6OzslIaGhnTy6GPm7SMqe8Lob7y+1Opn9BoeHpbq6uoPwXz1foDJcQLvf+N//vyZHi3vL8Wgp1D2kaR/1lNITyD9FjU6OppgzczMpJNHLwXW29v7IZiv3I8TJsdY9HYLCwtydXX1+kjSpWdfhhWJPp4UgJ4W+o4zPz+f3k2amprk9+/fCU1HR4e0tbXJ5uamnJycSFVVVarRXu+/QXne71+I68u3zPtHkp4Q+mL7/lvS23ccBaOPIP2NVlxLS0sJQ/Y9ZXBwMOFRXFqjL8QKZ3d39/UFWb896eV1v3x84dX58x7MP/mVUSx6guilp8l3X7m+33fO878E852BRu8NmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm/3B89OPbW5/bE0AAAAAElFTkSuQmCC">
                <img data-src="holder.js/140x140" class="img-framed" alt="140x140" style="width: 140px; height: 140px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIwAAACMCAYAAACuwEE+AAAFiElEQVR4Xu3XSUtcaxCH8XLAWRRFxIWKE7gRx6Cigl/deQRxQBQcl6JpJXEeQ73QYlyIdS373q77nFVMquuk/vXzPacLMpnMi3CRwCcTKADMJ5OiLCUAGCCYEgCMKS6KAYMBUwKAMcVFMWAwYEoAMKa4KAYMBkwJAMYUF8WAwYApAcCY4qIYMBgwJQAYU1wUAwYDpgQAY4qLYsBgwJQAYExxUQwYDJgSAIwpLooBgwFTAoAxxUUxYDBgSgAwprgoBgwGTAkAxhQXxYDBgCkBwJjiohgwGDAlABhTXBQDBgOmBABjiotiwGDAlABgTHFRDBgMmBIAjCkuigGDAVMCgDHFRTFgMGBKADCmuCgGDAZMCQDGFBfFgMGAKQHAmOKiGDAYMCUAGFNcFAMGA6YEAGOKi2LAYMCUAGBMcVEMGAyYEgCMKS6KAYMBUwKAMcVFMWAwYEoAMKa4KAYMBkwJAMYUF8WAwYApAcCY4qIYMBgwJQAYU1wUAwYDpgQAY4qLYsBgwJRA3oM5PDyU4+NjGRkZkbKysr+Gz2Qysr29LRUVFdLf3y8FBQXy8vIiW1tbcnZ2ln5ub2+XlpaWT4eW6/t9+j+Wo8K8BXNxcSEK4uDgIEU1NjYm5eXlr7EpjKmpKXl8fJSSkhIZHx+XwsJCWV9fl9PTUyktLZX7+/sEqKenRxobGz+MPNf3y9H+zbfJWzDT09Np4dlLQbw9Yfb29uTo6Cj9s/69gnp6ehL9nMKZmJhI4BRQbW2tdHd3y8bGhhQVFcnAwIBcXl7Kzs5OgtXX1yezs7Ou9xsaGjIv67/wgbwFoyeHPlIWFxfl5uYmnSBZMPrz3NxcetT8+vVLrq+vE5CHh4e0+OLi4vRzFpD+rJ9fW1uT8/Nzqaurk9vb2/S5rq4uaW1tTSeV9/0Ubr5deQsmG7SC0dPgLZiVlZX0d5OTk7K8vCx3d3evJ4qiqK+vT+80ikBPHH1k6QmUBfX8/Jza19TUyI8fP/7aqef9FGC+XeHA6LvG6uqqVFZWSnNzs+zv74sC6OzslIaGhnTy6GPm7SMqe8Lob7y+1Opn9BoeHpbq6uoPwXz1foDJcQLvf+N//vyZHi3vL8Wgp1D2kaR/1lNITyD9FjU6OppgzczMpJNHLwXW29v7IZiv3I8TJsdY9HYLCwtydXX1+kjSpWdfhhWJPp4UgJ4W+o4zPz+f3k2amprk9+/fCU1HR4e0tbXJ5uamnJycSFVVVarRXu+/QXne71+I68u3zPtHkp4Q+mL7/lvS23ccBaOPIP2NVlxLS0sJQ/Y9ZXBwMOFRXFqjL8QKZ3d39/UFWb896eV1v3x84dX58x7MP/mVUSx6guilp8l3X7m+33fO878E852BRu8NmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm8HmOgbdp4PMM6BRm/3B89OPbW5/bE0AAAAAElFTkSuQmCC">
            </div>
            <br />
            <div>
                <h2 class="sr-title">HR</h2>    
                <div>
                    <hr />
                </div>
            </div>
            <div>
                <h2 class="sr-title">Unordered List</h2>    
                <div>
                    <ul>
                        <li>This is a list item in an unordered list</li>
                        <li>An unordered list is a list in which the sequence of items is not important. Sometimes, an unordered list is a bulleted list. And this is a long list item in an unordered list that can wrap onto a new line. </li>
                        <li>
                            Lists can be nested inside of each other
                            <ul>
                                <li>This is a nested list item</li>
                                <li>This is another nested list item in an unordered list</li>
                            </ul>
                        </li>
                        <li>This is the last list item</li>
                    </ul>
                </div>
            </div>
            <div>
                <h2 class="sr-title">Ordered List</h2>    
                <div>
                    <ol>
                        <li>This is a list item in an ordered list</li>
                        <li>An ordered list is a list in which the sequence of items is important. An ordered list does not necessarily contain sequence characters.</li>
                        <li>
                            Lists can be nested inside of each other
                            <ol>
                                <li>This is a nested list item</li>
                                <li>This is another nested list item in an ordered list</li>
                            </ol>
                        </li>
                        <li>This is the last list item</li>
                    </ol>
                </div>
            </div>
            <div>
                <h2 class="sr-title">Inline List (.inline-list)</h2>    
                <div>
                    <ul class="inline-list">
                        <li>This is an inline list </li>
                        <li>that is positioned inline</li>
                        <li> with no bullets</li>
                        <li>This is the last list item</li>
                    </ul>
                </div>
            </div>
            <div>
                <h2 class="sr-title">Nav List</h2>    
                <div>
                    <nav>
                        <ul>
                            <li>This is a nav list </li>
                            <li>that is positioned inline</li>
                            <li> with no bullets</li>
                            <li>This is the last list item</li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div>
                <h2 class="sr-title">Definition List</h2>    
                <div>
                    <dl>
                            <dt>Definition List</dt>
                            <dd>A number of connected items or names written or printed consecutively, typically one below the other.</dd>
                        <dt>This is a term.</dt>
                        <dd>This is the definition of that term, which both live in a <code>dl</code>.</dd>
                        <dt>Here is another term.</dt>
                        <dd>And it gets a definition too, which is this line.</dd>
                        <dt>Here is term that shares a definition with the term below.</dt>
                        <dd>And it gets a definition too, which is this line.</dd>
                    </dl>
                </div>
            </div>

            <div>
                <h2 class="sr-title">Tables</h2>    
                <div>
                    <table>
                        <thead>
                        <tr>
                            <th>Header</th>
                            <th>Header</th>
                            <th>Header</th>
                            <th>Header</th>
                        </tr>
                    </thead>
                        <tr>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                        </tr>
                        <tr>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                        </tr>
                        <tr>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                        </tr>
                        <tr>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                        </tr>
                    </table>
                </div>

                <div>
                    <table class="table-alt">
                        <thead>
                        <tr>
                            <th>Header</th>
                            <th>Header</th>
                            <th>Header</th>
                            <th>Header</th>
                        </tr>
                    </thead>
                        <tr>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                        </tr>
                        <tr>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                        </tr>
                        <tr>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                        </tr>
                        <tr>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                        </tr>
                    </table>
                </div>

            </div>
        <div>
            <h2 class="sr-title">Text Fields</h2>
            <fieldset>
                
                    <label for="text">Text Input <abbr title="Required">*</abbr></label>
                    <input id="text" type="text" placeholder="Text Input">
                
                    <label for="password">Password</label>
                    <input id="password" type="password" placeholder="Type your Password">
                
                    <label for="webaddress">Web Address</label>
                    <input id="webaddress" type="url" placeholder="http://yoursite.com">
                
                    <label for="emailaddress">Email Address</label>
                    <input id="emailaddress" type="email" placeholder="name@email.com">
                
                    <label for="search">Search</label>
                    <input id="search" type="search" placeholder="Enter Search Term">
                
                    <label for="text">Number Input <abbr title="Required">*</abbr></label>
                    <input id="text" type="number" placeholder="Enter a Number" pattern="[0-9]*">
                
                    <label for="textarea">Textarea</label>
                    <textarea id="textarea" rows="8" cols="48" placeholder="Enter your message here"></textarea>
            </fieldset>
        </div>
        <div>
            <h2 class="sr-title">Select Menu</h2>
            <fieldset>
                <label for="select">Select</label>
                <select id="select">
                    <optgroup label="Option Group">
                        <option>Option One</option>
                        <option>Option Two</option>
                        <option>Option Three</option>
                    </optgroup>
                </select>
            </fieldset>
        </div>
        <div>
            <h2 class="sr-title">Checkbox</h2>
            <form action="#">
                <fieldset class="options">
                    <legend>Checkbox <abbr title="Required">*</abbr></legend>
                    <ul class="unstyled-list">
                        <li><label for="checkbox1"><input id="checkbox1" name="checkbox" type="checkbox" checked="checked"> Choice A</label></li>
                        <li><label for="checkbox2"><input id="checkbox2" name="checkbox" type="checkbox"> Choice B</label></li>
                        <li><label for="checkbox3"><input id="checkbox3" name="checkbox" type="checkbox"> Choice C</label></li>
                    </ul>
                </fieldset>
            </form>
        </div>
        <div>
            <h2 class="sr-title">Radio Buttons</h2>
            <form action="#">
                <fieldset class="options">
                    <legend>Radio</legend>
                    <ul class="unstyled-list">
                        <li><label for="radio1"><input id="radio1" name="radio" type="radio" class="radio" checked="checked"> Option 1</label></li>
                        <li><label for="radio2"><input id="radio2" name="radio" type="radio" class="radio"> Option 2</label></li>
                        <li><label for="radio3"><input id="radio3" name="radio" type="radio" class="radio"> Option 3</label></li>
                    </ul>
                </fieldset>
            </form>
        </div>
        <div>
            <h2 class="sr-title">HTML5 Inputs</h2>
            <fieldset>
                <label for="ic">Color input</label>
                <input type="color" id="ic" value="#000000">
                <label for="in">Number input</label>
                <input type="number" id="in" min="0" max="10" value="5">
                <label for="ir">Range input</label>
                <input type="range" id="ir" value="10">
                <label for="idd">Date input</label>
                <input type="date" id="idd" value="1970-01-01">
                <label for="idm">Month input</label>
                <input type="month" id="idm" value="1970-01">
                <label for="idw">Week input</label>
                <input type="week" id="idw" value="1970-W01">
                <label for="idt">Datetime input</label>
                <input type="datetime" id="idt" value="1970-01-01T00:00:00Z">
                <label for="idtl">Datetime-local input</label>
                <input type="datetime-local" id="idtl" value="1970-01-01T00:00">
            </fieldset>
        </div>
        <div>
            <h2 class="sr-title">Button</h2>
            <p><a href="#" class="btn">Button</a>
            <a href="#" class="btn-alt">Button (alt)</a>
            <a href="#" class="btn-other">Button (other)</a></p>
            <button class="btn" type="submit">Button</button>
            <input class="btn" type="button" value="Input">
            <input class="btn" type="submit" value="Submit">
        </div>
        <br />
        <div>
            <h2 class="sr-title">Callout</h2>
            <div class="callout">
                <h3 class="callout-title">Callout Title</h3>
                <p>A paragraph (from the Greek paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. The start of a paragraph is indicated by beginning on a new line.</p>
            </div>

            <div class="callout-alt">
                <h3 class="callout-title">Callout (alt) Title</h3>
                <p>A paragraph (from the Greek paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. The start of a paragraph is indicated by beginning on a new line.</p>
            </div>

            <div class="callout-other">
                <h3 class="callout-title">Callout (other) Title</h3>
                <p>A paragraph (from the Greek paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. The start of a paragraph is indicated by beginning on a new line.</p>
            </div>
        </div>
        <div>
            <h2 class="sr-title">Media</h2>
            
            <div class="bs-example">
                <div class="media">
                  <a class="pull-left" href="#">
                    <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACsklEQVR4Xu2Y24upYRTGl0PI0JSimHDjMIVETVMzpvzrziLSTIkiLpTcjJLzcfaziuz2Njufsb8La93o+3jX+65nHX55NZ+fnzu6YdOIAFIB0gIyA254BpIMQaGAUEAoIBQQCtywAoJBwaBgUDAoGLxhCMifIcGgYFAwKBgUDAoGb1iBizHYbDap3+/Tbrcjp9NJwWCQNBrNQdJflKF6vU5ms5lisdhv353S/Ro+T+11kQCNRoN6vR7p9Xr2v16vyev1kt/v52eIkkql+L3BYKBEIkFarfbberuGz+82VCzAZrOhdDrNGX17e6PVakXdbpesVis9PDzwnq1Wi9/BTCYTvb6+0mQyoff3d9LpdBSPx2k8HhOCNhqNFIlEKJvNnu3zuOLO7WbFAiyXSz7sdrvloOfzObdAIBDgM8xmM8rlcuTxeGg0GtF0OmWhcNhKpULD4ZBsNhuvw3eoGqxX6vPcwPe/VywAertarbIftADKHIYgQqEQlctlzm4ymaRSqUSLxeIgwLF4WHN/f09PT090ic//LgAynM/nuXRfXl44i8VikXs9HA6zOHd3d+R2u6ndbnOl+Hw+foZ1Oh1+D3t+fuYqutSnEhEUVwAyjhmA3oYA+2cI8Pj4SLVa7Y/zYACiIjAcM5nMoWrsdjtFo9GDDyU+/zVcT4mjWAAEgQpA1lwuF3+irx0OB1cAyhyGg6EdIBAyjeA+Pj5oMBiQxWLhykF1YABirVKfSrKPNYoFwGIMsEKhQCACDO2AXkaQx4bWgACgAAYiBNnTA0KA+5gje5qc61MVChwHiGEHQ0Z/yq7h829nu6gCfipYNf2IAHIjJDdCciMkN0JqTmG19xYKCAWEAkIBoYDak1jN/YUCQgGhgFBAKKDmFFZ7b6GAUEAoIBQQCqg9idXcXyhw6xT4AgyAjZ+ww1kxAAAAAElFTkSuQmCC">
                  </a>
                  <div class="media-body">
                    <h4 class="media-heading">Media heading</h4>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                  </div>
                </div>

                <div class="media">
                  <a class="pull-left" href="#">
                    <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACsklEQVR4Xu2Y24upYRTGl0PI0JSimHDjMIVETVMzpvzrziLSTIkiLpTcjJLzcfaziuz2Njufsb8La93o+3jX+65nHX55NZ+fnzu6YdOIAFIB0gIyA254BpIMQaGAUEAoIBQQCtywAoJBwaBgUDAoGLxhCMifIcGgYFAwKBgUDAoGb1iBizHYbDap3+/Tbrcjp9NJwWCQNBrNQdJflKF6vU5ms5lisdhv353S/Ro+T+11kQCNRoN6vR7p9Xr2v16vyev1kt/v52eIkkql+L3BYKBEIkFarfbberuGz+82VCzAZrOhdDrNGX17e6PVakXdbpesVis9PDzwnq1Wi9/BTCYTvb6+0mQyoff3d9LpdBSPx2k8HhOCNhqNFIlEKJvNnu3zuOLO7WbFAiyXSz7sdrvloOfzObdAIBDgM8xmM8rlcuTxeGg0GtF0OmWhcNhKpULD4ZBsNhuvw3eoGqxX6vPcwPe/VywAertarbIftADKHIYgQqEQlctlzm4ymaRSqUSLxeIgwLF4WHN/f09PT090ic//LgAynM/nuXRfXl44i8VikXs9HA6zOHd3d+R2u6ndbnOl+Hw+foZ1Oh1+D3t+fuYqutSnEhEUVwAyjhmA3oYA+2cI8Pj4SLVa7Y/zYACiIjAcM5nMoWrsdjtFo9GDDyU+/zVcT4mjWAAEgQpA1lwuF3+irx0OB1cAyhyGg6EdIBAyjeA+Pj5oMBiQxWLhykF1YABirVKfSrKPNYoFwGIMsEKhQCACDO2AXkaQx4bWgACgAAYiBNnTA0KA+5gje5qc61MVChwHiGEHQ0Z/yq7h829nu6gCfipYNf2IAHIjJDdCciMkN0JqTmG19xYKCAWEAkIBoYDak1jN/YUCQgGhgFBAKKDmFFZ7b6GAUEAoIBQQCqg9idXcXyhw6xT4AgyAjZ+ww1kxAAAAAElFTkSuQmCC">
                  </a>
                  <div class="media-body">
                    <h4 class="media-heading">Media heading</h4>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    <div class="media">
                      <a class="pull-left" href="#">
                        <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACsklEQVR4Xu2Y24upYRTGl0PI0JSimHDjMIVETVMzpvzrziLSTIkiLpTcjJLzcfaziuz2Njufsb8La93o+3jX+65nHX55NZ+fnzu6YdOIAFIB0gIyA254BpIMQaGAUEAoIBQQCtywAoJBwaBgUDAoGLxhCMifIcGgYFAwKBgUDAoGb1iBizHYbDap3+/Tbrcjp9NJwWCQNBrNQdJflKF6vU5ms5lisdhv353S/Ro+T+11kQCNRoN6vR7p9Xr2v16vyev1kt/v52eIkkql+L3BYKBEIkFarfbberuGz+82VCzAZrOhdDrNGX17e6PVakXdbpesVis9PDzwnq1Wi9/BTCYTvb6+0mQyoff3d9LpdBSPx2k8HhOCNhqNFIlEKJvNnu3zuOLO7WbFAiyXSz7sdrvloOfzObdAIBDgM8xmM8rlcuTxeGg0GtF0OmWhcNhKpULD4ZBsNhuvw3eoGqxX6vPcwPe/VywAertarbIftADKHIYgQqEQlctlzm4ymaRSqUSLxeIgwLF4WHN/f09PT090ic//LgAynM/nuXRfXl44i8VikXs9HA6zOHd3d+R2u6ndbnOl+Hw+foZ1Oh1+D3t+fuYqutSnEhEUVwAyjhmA3oYA+2cI8Pj4SLVa7Y/zYACiIjAcM5nMoWrsdjtFo9GDDyU+/zVcT4mjWAAEgQpA1lwuF3+irx0OB1cAyhyGg6EdIBAyjeA+Pj5oMBiQxWLhykF1YABirVKfSrKPNYoFwGIMsEKhQCACDO2AXkaQx4bWgACgAAYiBNnTA0KA+5gje5qc61MVChwHiGEHQ0Z/yq7h829nu6gCfipYNf2IAHIjJDdCciMkN0JqTmG19xYKCAWEAkIBoYDak1jN/YUCQgGhgFBAKKDmFFZ7b6GAUEAoIBQQCqg9idXcXyhw6xT4AgyAjZ+ww1kxAAAAAElFTkSuQmCC">
                      </a>
                      <div class="media-body">
                        <h4 class="media-heading">Nested media heading</h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                      </div>
                    </div>
                  </div>
                </div>

                <div class="media">
                  <a class="pull-right" href="#">
                    <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACsklEQVR4Xu2Y24upYRTGl0PI0JSimHDjMIVETVMzpvzrziLSTIkiLpTcjJLzcfaziuz2Njufsb8La93o+3jX+65nHX55NZ+fnzu6YdOIAFIB0gIyA254BpIMQaGAUEAoIBQQCtywAoJBwaBgUDAoGLxhCMifIcGgYFAwKBgUDAoGb1iBizHYbDap3+/Tbrcjp9NJwWCQNBrNQdJflKF6vU5ms5lisdhv353S/Ro+T+11kQCNRoN6vR7p9Xr2v16vyev1kt/v52eIkkql+L3BYKBEIkFarfbberuGz+82VCzAZrOhdDrNGX17e6PVakXdbpesVis9PDzwnq1Wi9/BTCYTvb6+0mQyoff3d9LpdBSPx2k8HhOCNhqNFIlEKJvNnu3zuOLO7WbFAiyXSz7sdrvloOfzObdAIBDgM8xmM8rlcuTxeGg0GtF0OmWhcNhKpULD4ZBsNhuvw3eoGqxX6vPcwPe/VywAertarbIftADKHIYgQqEQlctlzm4ymaRSqUSLxeIgwLF4WHN/f09PT090ic//LgAynM/nuXRfXl44i8VikXs9HA6zOHd3d+R2u6ndbnOl+Hw+foZ1Oh1+D3t+fuYqutSnEhEUVwAyjhmA3oYA+2cI8Pj4SLVa7Y/zYACiIjAcM5nMoWrsdjtFo9GDDyU+/zVcT4mjWAAEgQpA1lwuF3+irx0OB1cAyhyGg6EdIBAyjeA+Pj5oMBiQxWLhykF1YABirVKfSrKPNYoFwGIMsEKhQCACDO2AXkaQx4bWgACgAAYiBNnTA0KA+5gje5qc61MVChwHiGEHQ0Z/yq7h829nu6gCfipYNf2IAHIjJDdCciMkN0JqTmG19xYKCAWEAkIBoYDak1jN/YUCQgGhgFBAKKDmFFZ7b6GAUEAoIBQQCqg9idXcXyhw6xT4AgyAjZ+ww1kxAAAAAElFTkSuQmCC">
                  </a>
                  <div class="media-body">
                    <h4 class="media-heading">Media heading</h4>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                  </div>
                </div>

            </div>
        </div>
        <div>
            <h2 class="sr-title">Grids</h2>

            <h3>Responsive column resets</h3>
            <div class="row show-grid">
              <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
              <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>

              <!-- Add the extra clearfix for only the required viewport -->
              <div class="clearfix visible-xs"></div>

              <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
              <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
            </div>

            <h3>Nesteing Columns</h3>
            <div class="row show-grid">
              <div class="col-md-9">
                Level 1: .col-md-9
                <div class="row">
                  <div class="col-md-6">
                    Level 2: .col-md-6
                  </div>
                  <div class="col-md-6">
                    Level 2: .col-md-6
                  </div>
                </div>
              </div>
            </div>

            <h3>Offsetting columns</h3>
            <div class="row show-grid">
              <div class="col-md-4">.col-md-4</div>
              <div class="col-md-4 col-md-offset-4">.col-md-4 .col-md-offset-4</div>
            </div>
            <div class="row show-grid">
              <div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
              <div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
            </div>
            <div class="row show-grid">
              <div class="col-md-6 col-md-offset-3">.col-md-6 .col-md-offset-3</div>
            </div>

            <h3>Column ordering</h3>
            <div class="row show-grid">
              <div class="col-md-9 col-md-push-3">.col-md-9 .col-md-push-3</div>
              <div class="col-md-3 col-md-pull-9">.col-md-3 .col-md-pull-9</div>
            </div>
        </div>

    </section>
</div>


        <!-- Add javascript here -->

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>