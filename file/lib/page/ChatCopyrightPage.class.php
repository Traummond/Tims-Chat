<?php
namespace wcf\page;
use \wcf\system\WCF;

/**
 * Shows information about Tims chat.
 *
 * @author 	Tim Düsterhus
 * @copyright	2010-2011 Tim Düsterhus
 * @license	Creative Commons Attribution-NonCommercial-ShareAlike <http://creativecommons.org/licenses/by-nc-sa/3.0/legalcode>
 * @package	timwolla.wcf.chat
 * @subpackage	page
 */
class ChatCopyrightPage extends AbstractPage {
	public $neededModules = array('CHAT_ACTIVE');
	//public $neededPermissions = array('user.chat.canEnter');
	
	/**
	 * @see	\wcf\page\IPage::readParameters()
	 */
	public function readParameters() {
		//     ###
		//   ##   ##
		//  #       #
		//  # ##### #
		// # #     # #
		// # # * * # #
		// # #     # #
		// #  #   #  #
		//  #  ###  #
		//  #       #
		//   #######
		//   # # # #
		//   # # # #
		//   # # # #
		
		if (isset($_GET['sheep'])) $this->useTemplate = false;
	}
	
	/**
	 * @see	\wcf\page\IPage::show()
	 */
	public function show() {
		// guests are not supported
		if (!WCF::getUser()->userID) {
			throw new \wcf\system\exception\PermissionDeniedException();
		}
		
		parent::show();
		if ($this->useTemplate) exit;
		@header('Content-type: image/png');
		\wcf\util\HeaderUtil::sendNoCacheHeaders();
		$images = explode('8b7908231504de26ce32f70744b5cb2b6da6fd46', file_get_contents(__FILE__, null, null, __COMPILER_HALT_OFFSET__));
		echo $images[array_rand($images)];
		exit;
	}
}
__halt_compiler();�PNG

   IHDR   �   �  KAt   sRGB ���   bKGD � � �����   	pHYs     ��   tIME�	��e�  IDATx����u�:�a��&���W�>�ƾ99+������w�c�h�$�m��y�;�ll߶m��������x�ѣ���y��F�	�û}���x������������秅�Z��[Mk�߽��Pc'�e�~t{��ik<o����u�%�i�|.\~6o�{)�c-�J��#�4����������O|�۩��Ml���\#�CjG�}���DO����t��������HCð�y�\���|%8����Ū�,Ŏ�;���z2�aG;.mLV�Ξ��S_�N�����
?U�$ep�t��A�|m��L��< )|�FVj?s]|Qe����2<K��V��F]:^�=�C}�1���%�F?�0O�D	]�	k��U�h>*�JX"<�U»��UB��0�R���8Lc��tJ��i%���Ө% �UUMJ*��R,�N�1�a���'gMଽ�kjQ�]g5�_�3Y|�ɜE��]Tq���*��+]��Y=|E74/M8�gg�������5`7L	ꚳ*x�uƊ�7�tp5T:����_X��!�}!ѥ���9�X�"��  ���>�KQJ,bk倿���d��B7$��JʧN��	���X+r�Z�+o�kqA�,b�X3V�I����H�ͮ�x�"��.Jk�L3�E,bK���z�g�X�Z6௬�{��9�X�j���:�~=��O�:��".(Jk5g����U�IU}�a��X�@_�k���,ݐX���E,b�X �     @k�8�K����2��c������*Ew���*?�wȁ��c���X�<��e?�6���
|��c�����Gn��?iw%�N$���i�$�Z�<�NI�+>������c���~��d+3$�L_cլw�N�����B����̐X`,0�Xh���nhq�X��ܳ �c���,���c����L����) �c���m�Ɵ M)l���%� �c�� �c�� �c���X$ c��     �T�q&�Nq�    IEND�B`�8b7908231504de26ce32f70744b5cb2b6da6fd46�PNG

   IHDR   �   �   �F�   sRGB ���   bKGD � � �����   	pHYs  �  �(J�   tIME�"1���  eIDATx��ݿ��G��}.����b�P<1] E�baa%��Jl���aCr�5�G����]l�@<�"��Is���_���g�y}��f�g���;;;�O7�guf�o�� H $  � H $ ��e�/��d2I2���W�����ߤ�S�6$�}�~<{�I/Je a @ R�@�.@�M������m�Q�Y���ٰ]+ ��A��  1�H �@ ��0 1P�����=�ܘ�FE]���Í�*j�<zl���r��b�7��>=�����}һ2� �6�I�@ %L �@ b  1�;��'e��Ïzw�{	Ё���F�@��������k?�c�����Jشp�j��6�.a���z	P'��O�  @J��E�r^W���$�L��n�1��9�D�6�q�Jx2�~l����4���zy�p�v����`��O�!{�l�ߍ��hn���p[���1s�mn�U¬o��@ �   Hf��Y�&X�>P��>�����k����SyT��
{��3�J�0 1�@ ��X�|�g ��7�����ǜʋ��S M=�1�:���%)�2�^��_�>�r����=�f��W�6���*G�	�(90__RU�a�� T��a b  1P�O�Hf]¬�@-�%�t�x|���Qv��6�:^�u}|�V����y�r����,�F�v]1c.m��]D�\��} 7ڃ � �u1���	С��<���$���`�n��$}}��[Q��^���	K5�Tp�0R,�g��7�@ b �Q�f4��_"`��~p���9��Vb����(�0�Μ�YZZ�g���2�\d=�*� �w�fu+@�@�@��ids��������4[����d���_�}%�Z�JX��qj�+�k��-��4@ V`  H	S�H_ bDl(�����������,��N1%�B�+a�@�@ b b b � T��G�Q���싁@��@ Q�@ �Y���_�����Y�"1�[8Htڰ8�� ) m 1�HH $ RªNW��M˖Y+i0s�C $  	�D $  Iy07Q�8@�#    IEND�B`�