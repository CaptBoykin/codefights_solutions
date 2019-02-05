# Definition for singly-linked list:
# class ListNode(object):
#   def __init__(self, x):
#     self.value = x
#     self.next = None
#
def removeKFromList(l, k):
    current = l
    vals = []
    while current != None:
        if current.value != k and current.value != None:
            vals.append(current.value)
        current = current.next
    return vals
