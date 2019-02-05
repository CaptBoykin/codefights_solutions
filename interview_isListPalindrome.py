# Definition for singly-linked list:
# class ListNode(object):
#   def __init__(self, x):
#     self.value = x
#     self.next = None
#
def isListPalindrome(l):
    current = l
    vals = []
    while current != None:
        vals.append(current.value)
        current = current.next
    return(list(map(int, vals)) == list(map(int, vals))[::-1])
