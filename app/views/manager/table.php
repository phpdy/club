<table>
    <tbody>
    <tr><td class="title"><b>标题:</b></td><td><input type="text" name="title" size=50 value="<?php echo @$club['title'];?>"></td></tr>
    <tr><td class="title"><b>日期:</b></td><td><input type="text" name="sdate" size=20 value="<?php echo @$club['sdate'];?>" onclick="new Calendar().show(this);" readonly></td></tr>
    <tr><td class="title"><b>简介:</b></td><td><textarea name="info" cols=100 rows=5><?php echo @$club['info'];?></textarea></td></tr>
    <tr><td class="title"><b>正文:</b></td><td><textarea name="content" cols=100 rows=5><?php echo @$club['content'];?></textarea></td></tr>
    
    <tr><td colspan="2"><input type="submit" value="提  交" name="sub" class="sub-btn"></td></tr>
    </tbody>
</table>